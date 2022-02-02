---
{"category_name":"medium","problem_code":"REGIONS","problem_name":"Dividing into Regions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,xcwgf666","date_added":"8-06-2016","tags":{"0":"bfs","1":"dfs","2":"memoization","3":"snckpb16","4":"tree","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/REGIONS","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/REGIONS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/REGIONS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/REGIONS.pdf">Vietnamese</a> as well.</h3>


<p>ChefLand develops very fast. Recently, there were a few new cities built, so the total number of cities in ChefLand have become <b>N</b>.</p>

<p>In order to communicate, the cities are connected with <b>N-1</b> bidirectional roads in such a way that there is exactly one way to get from one city to another. In other words, the graph with cities as nodes and roads as edges is a tree.</p>

<p>Now, the King of ChefLand thinks that the country is too big to be ruled by one person, so he decided to split in two parts, each of which will be ruled by one of two his sons. The split should be made by blocking one road. After doing that, there will be two connected parts which will be ruled by sons.</p>

<p>However, not every division is good. In some cases, one of the parts will still be very large, thus, it will be very hard for some of the sons to rule it. So, for every connected part, there's a value called <b>inconvenience</b>. The inconvenience of the part equals to the distance between two most distance cities belonging to this part.</p>

<p>So for every split, there are two <b>inconvenience</b> values that should be calculated. Please help the King to find them!</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>In order not to make this problem I/O related, we will give you the road system in the compressed form. The first and only line of the test case will contain six space-separated integers <b>N, A, B, C, D, E</b> with the following meaning:
<ul>
<li>The road system contains <b>N</b> cities and <b>N-1</b> roads.</li>
<li>The <b>i</b><sup>th</sup> road (1-indexed) connects the cities with the numbers <b>i+1</b> and <b>((A + B * (i - 1)) % i) + 1</b> and has the length equal to <b>(C * i + D) % E</b>.
</ul>
It is guaranteed that the road system, generated this way will be connected.
</p>

<h3>Output</h3>
<p>In order not to make this problem I/O-related, we will ask you the hash function of the answer to each test case.</p>
<p>The hash function is calculated this way:
<li>First, an 1-indexed sequence <b>Q</b> of <b>2(N-1)</b> answers is created.</li>
<li>The <b>(2*i-1)</b><sup>th</sup> term of this sequence is the smallest of the inconvenience values after removing the <b>i</b><sup>th</sup> edge.</li>
<li>The <b>(2*i)</b><sup>th</sup> term of this sequence is the greatest of the inconvenience values after removing the <b>i</b><sup>th</sup> edge.</li>
<li>Then, the value of the hash function is a sum of <b>Q<sub>i</sub> * (1000000 + 3)<sup>i-1</sup></b>, modulo <b>10<sup>9</sup>+7</b>.</li>
</ul>
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2</b> ≤ <b>N</b>, sum of <b>N</b> ≤ <b>5 × 10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>A, B, C, D</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>2</b> ≤ <b>E</b> ≤ <b>200</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5 1 2 3 4 5
89 189 111 34 7 200</tt>

<b>Output:</b>
<tt>99116027
515191750</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The roads are:
<ul>
<li>Road connecting cities <b>1</b> and <b>2</b> with length <b>2</b>;</li>
<li>Road connecting cities <b>2</b> and <b>3</b> with length <b>0</b>;</li>
<li>Road connecting cities <b>3</b> and <b>4</b> with length <b>3</b>;</li>
<li>Road connecting cities <b>4</b> and <b>5</b> with length <b>1</b>.</li>
</ul>
</p>
<p>If we remove the first road, then the inconveniences of the parts will be equal to <b>0</b> and <b>4</b>. So <b>Q<sub>1</sub> = 0, Q<sub>2</sub> = 4</b>.</p>
<p>If we remove the second road, the inconveniences will be equal to <b>2</b> and <b>4</b>. So <b>Q<sub>3</sub> = 2, Q<sub>4</sub> = 4</b>.</p>
<p>If we remove the third road, the inconveniences will be equal to <b>2</b> and <b>1</b>. So <b>Q<sub>5</sub> = 1, Q<sub>6</sub> = 2</b>.</p>
<p>If we remove the fourth road, the inconveniences will be equal to <b>5</b> and <b>0</b>. So <b>Q<sub>7</sub> = 0, Q<sub>8</sub> = 5</b>.</p>
<p>So, we've obtained the sequence <b>Q = (0, 4, 2, 4, 1, 2, 0, 5)</b>.</p>
<p>By calculating the hash function, we get <b>0 × 1000003<sup>0</sup>+4 × 1000003<sup>1</sup>+2 × 1000003<sup>2</sup>+4 × 1000003<sup>3</sup>+1 × 1000003<sup>4</sup>+2 × 1000003<sup>5</sup>+0 × 1000003<sup>6</sup>+5 × 1000003<sup>7</sup> mod (10<sup>9</sup>+7)= 5000105000947004756014371026147026557011640 mod (10<sup>9</sup>+7) = 99116027</b></p>
<p><b>Example case 2.</b> This is just a big test case, so that you could check your solution better.</p>