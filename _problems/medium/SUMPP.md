---
{"category_name":"medium","problem_code":"SUMPP","problem_name":"Provinces of ChefLand","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"5-07-2016","tags":{"0":"xcwgf666"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/SUMPP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/SUMPP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SUMPP.pdf">Vietnamese</a> as well.</h3>
<p>Following the example of ByteLand, the King of ChefLand has decided to divide the country into provinces.</p>
<p>The map of ChefLand is a rectangular matrix consisting of <b>N</b> rows and <b>M</b> columns. The cell at the crossing of the <b>i</b><sup>th</sup> row and the <b>j</b><sup>th</sup> column denotes a single ChefLand city. So, there are <b>N</b> × <b>M</b> cities. There are <b>A<sub>i, j</sub></b> people living in the city at the crossing of the <b>i</b><sup>th</sup> row and the <b>j</b><sup>th</sup> column.</p>
<p>Without enough contemplation, the King has decided that any connected region, consisting of exactly <b>K</b> cities should form a province. Two cities are said to be connected to each other if their corresponding cells share a side. The set of cities is said to be a <b>connected region</b>, if you can get from any city of the set to any other city of the set by moving only via side-adjacent cities from the set. It appears that a single city can belong to more than one province, but the King is happy with it: after all, the more provinces - the better.</p>
<p>Now the King wants to calculate the <b>productivity number</b> of the kingdom. This number is defined to be the product of the populations of all the provinces. The population of a province is the sum of the populations of all the cities in the province.</p>
<p>The King's servants had finally found the <b>productivity number</b>. However, the King is not sure whether they're correct or not. So he asks you to help him to check this. Please find the productivity number of the kingdom. Since it can be quite large, output it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains three space-separated integers: <b>N, M, K</b>, denoting the number of rows in the map, the number of columns in the map and the number of cities in one province.</p>
<p>Each of the following <b>N</b> lines contain <b>M</b> space-separated integers, denoting the populations of the cities.</p>
<h3>Output</h3>
<p>Output a single line containing the productivity value of the kingdom.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>min(10, N * M)</b></li>
<li><b>1</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2 2 2
1 2
3 4</tt>

<b>Output:</b>
<tt>504</tt>
</pre><h3>Explanation</h3>
</p><p>Here are all the provinces:</p>
<p>Province <b>1</b>, population <b>4</b>:</p>
<pre><tt><b>1</b> 2
<b>3</b> 4</tt></pre>
<p>Province <b>2</b>, population <b>3</b>:</p>
<pre><tt><b>1 2</b>
3 4</tt></pre>
<p>Province <b>3</b>, population <b>6</b>:</p>
<pre><tt>1 <b>2</b>
3 <b>4</b></tt></pre>
<p>Province <b>4</b>, population <b>7</b>:</p>
<pre><tt>1 2
<b>3 4</b></tt></pre>
<p>Since the productivity number is a product of all the populations, we get <b>4 × 3 × 6 × 7 = 504</b>.</p>
