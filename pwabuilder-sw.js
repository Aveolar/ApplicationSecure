const staticAssets=[
    "./",
    
    ];
self.addEventListener('install',async event=> {
    const cache=await caches.open('secure');
    cahe.adAll(staticAssets);
    console.log('installed')});
self.addEventListener('fetch',event=>{console.log('fetch')});