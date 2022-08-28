// 62f0658af750487b8bcb60b4a9c8fed9

let newsFetch = document.getElementById('newsFetch');
let result = true;
let sources = 'bbc-news';
let apiKey = '62f0658af750487b8bcb60b4a9c8fed9';

const xhr = new XMLHttpRequest('newsFetch');
xhr.open('GET', `https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=62f0658af750487b8bcb60b4a9c8fed9`, true);
// xhr.getAllResponseHeaders('Content-type', 'application/json');


xhr.onload = function () {
    if (this.status === 200) {
        let json = JSON.parse(this.responseText);
        let articles = json.articles;
        console.log(json);
        let newsHtml = "";
        articles.forEach(function (element, index) {
        let news = `
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-12">
       <center> <div class="p-12 md:w-1/2 flex flex-col items-start">
            <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">Articles</span>
            <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Breaking News ${index + 1}: ${element["title"]}</h2>
            <p class="leading-relaxed mb-8"> ${element["content"]}</p>
            <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                <a class="text-indigo-500 inline-flex items-center" href="${element["url"]}">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                </span>
            </div>
            
            <a class="inline-flex items-center">
                <img alt="blog" src="https://dummyimage.com/104x104" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-4">
                        <span class="title-font font-medium text-gray-900">Abhijeet Gupta</span>
                        <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
                    </span>
            </a>
            </center>
        </div>

    </div>
</div>`;

 newsHtml += news;
        });
        document.getElementById('newsFetch').innerHTML = newsHtml ;
    }
    else {
        console.log("Some error occurred");
    }
}

xhr.send();

