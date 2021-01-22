
const assets=[
    "/",
    "./assets/css/dashboard/dash.css"
    ];
    
self.addEventListener('install', async event=> {
    
    const cache =await caches.open('secure');
    cache.addAll(assets);
    console.log('installed');
    
}
    );
    
self.addEventListener('fetch',event=>{
    const req=event.request;
    const url=new URL(req.url);
    if (url.origin===location.origin){
      event.respondWith(cacheFirst(req));  
    }
    else {event.respondWith(networkFirst(req))};
    
    console.log('fetch')
    
});
    
   async function cacheFirst(req){
       const cacheResponse=await caches.open(req);
       return cacheResponse || fetch(req);
        
    }
    async function networkFirst(req){
        const cache= await caches.open('dynamic');
        try{
            const res=await fetch(req);
            cache.put(req,res.clone());
            return res;
        }
        catch(error){
           return await cache.match(req); 
        }
    }
    