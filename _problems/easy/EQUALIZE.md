---
{"category_name":"easy","problem_code":"EQUALIZE","problem_name":"Equalize","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"7-06-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/EQUALIZE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/EQUALIZE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/EQUALIZE.pdf">Vietnamese</a> as well.</h3>


<p>Chef is creating a map for a certain real-time strategy video game. In this game, a map is a 2D rectangle of dimensions <b>N × M</b> tiles. Initially, the tile at row <b>i</b> and column <b>j</b> has a height of <b>H<sub>i,j</sub></b>. Heights are always integers.</p>

<p>Before creating the map, Chef first wants to make the heights of all the tiles equal. But he can only change height values using the <b>equalize</b> tool. The equalize tool is rectangular in shape, with dimensions <b>K × L</b>, and upon application, it replaces the height values of all the affected cells by their <b>median</b>. The equalize tool cannot be rotated. For example, in the following <b>5 × 9</b> grid of heights:</p>
<pre><tt>9 8 8 8 7 7 7 8 7
1 1 1 4 4 5 2 4 4
2 3 1 2 1 2 1 1 9
3 2 8 8 9 9 7 7 7
7 7 7 7 7 7 8 8 8
</tt></pre>
<p>Suppose the dimensions of the equalize tool is <b>3 × 7</b>, and we apply it in the middle <b>3 × 7</b> region. The median of the values in that region is <b>3</b>, so after application, the grid becomes:</p>
<pre><tt>9 8 8 8 7 7 7 8 7
1 3 3 3 3 3 3 3 4
2 3 3 3 3 3 3 3 9
3 3 3 3 3 3 3 3 7
7 7 7 7 7 7 8 8 8
</tt></pre>

<p>Note that <b>K</b> and <b>L</b> are odd integers, so that the median is always an integer.</p>

<p>Chef wants to make all height values equal by repeatedly applying the equalize tool. Furthermore, he also wants the final (common) height to be as large as possible. What is the maximum final (common) height that he can obtain?</p>

<p>Furthermore, you have to answer <b>Q</b> queries, where each query denotes a different set of values for <b>K</b> and <b>L</b>.</p>

<h3>Input</h3>
<p>The first line of input contains three integers, <b>N</b>, <b>M</b>, <b>Q</b>.</p>
<p>The following <b>N</b> lines describe the height values. Each line contains <b>M</b> integers. The <b>j<sup>th</sup></b> value in the <b>i<sup>th</sup></b> line contains <b>H<sub>i,j</sub></b>.</p>
<p>The following <b>Q</b> lines describe the queries. The <b>j<sup>th</sup></b> line contains two integers, <b>K<sub>j</sub></b> and <b>L<sub>j</sub></b>.</p>


<h3>Output</h3>
<p>For each query, output a single integer, the maximum final (common) height that Chef can obtain, assuming the size of the equalize tool is <b>K<sub>j</sub> × L<sub>j</sub></b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>N</b>, <b>M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>25</b></li>
<li><b>0</b> ≤ <b>H<sub>i,j</sub></b> ≤ <b>10<sup>7</sup></b></li>
<li><b>3</b> ≤ <b>K<sub>j</sub></b> ≤ <b>N</b></li>
<li><b>3</b> ≤ <b>L<sub>j</sub></b> ≤ <b>M</b></li> 
<li><b>K<sub>j</sub></b> and <b>L<sub>j</sub></b> are odd.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 7 3
8 5 5 5 8 6 8
8 9 5 5 5 9 8
8 6 8 5 5 5 8
3 3
3 5
3 7
</tt>
<b>Output:</b>
<tt>8
5
6</tt>
</pre>

<h3>Explanation</h3>
<p>In the first query, Chef can obtain a final height of <b>8</b> by first applying the equalizer on the leftmost <b>3 × 3</b> region:</p>

<pre><tt>8 8 8 5 8 6 8
8 8 8 5 5 9 8
8 8 8 5 5 5 8
</tt></pre>

<p>then the rightmost <b>3 × 3</b> region:</p>

<pre><tt>8 8 8 5 8 8 8
8 8 8 5 8 8 8
8 8 8 5 8 8 8
</tt></pre>

<p>and then finally the middlemost <b>3 × 3</b> region:</p>

<pre><tt>8 8 8 8 8 8 8
8 8 8 8 8 8 8
8 8 8 8 8 8 8
</tt></pre>

<p>It can be shown that this is the largest final height that can be obtained.</p>
