---
{"category_name":"medium","problem_code":"CK87DANC","problem_name":"Chef and Dancing Steps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM chicken","45":"SCM guile","46":"SCM qobi","47":"ST","48":"swift","49":"TCL","50":"TEXT","51":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"saeed_sryhini","problem_tester":"kingofnumbers","date_added":"20-10-2017","tags":{"0":"saeed_sryhini"},"time":{"view_start_date":1508697000,"submit_start_date":1508697000,"visible_start_date":1508697000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/mandarin/CK87DANC.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/russian/CK87DANC.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/vietnamese/CK87DANC.pdf">Vietnamese</a> as well.</h3>

<p>Majd Ajaj was one of the co-chefs who got accepted in the new job. His job was simple, just taste the food, and provide reports about its quality. Pretty simple huh? he thought that too, until one day one of the other co-chefs made a really spicy food, which made Majd's ears produce smoke like a train. The two of them got into a very bad fight that Chef decided to expel both of them.</p>

<p>When Majd tried to entreat Chef, he offered him a chance.</p>

<p>Chef gave Majd a catalog that contains <b>N</b> mini-dances <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, <b>...</b>, <b>D<sub>N</sub></b>, and an integer <b>M</b>. Chef will ask Majd <b>Q</b> queries. In each query Chef will give Majd two numbers <b>L</b> and <b>R</b>, and Majd has to calculate the following:</p>

<p>Consider the range <b>[L, R]</b> of mini-dances in the catalog, what is the smallest dance length that falls completely inside the range <b>[L, R]</b>, and the logical <b>XOR</b> of its elements is <b>no less</b> than <b>M</b>?</p>

<p>A dance is defined as a <b>consecutive</b> segment of mini-dances. A dance that starts at mini-dance <b>i</b>, and ends at mini-dance <b>j</b> is defined as <b>[i, j]</b>. The length of a dance <b>[i, j]</b> is <b>j - i + 1</b>.</p>
<p>Although Majd is an exceptional taster, he is not that good at dancing. Could you please help him find the answer for each query? Or determine that it's impossible for some of them.</p>
<p> </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>

<p>The first line of each test case contains three space separated integers <b>N</b>, <b>M</b> and <b>Q</b> denoting the length of the array, the number given by Chef, and the number of queries respectively.</p>

<p>The second line of each test case contains <b>N</b> space separated integers <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, <b>...</b>, <b>D<sub>N</sub></b> denoting the mini-dances in the catalog.</p>

<p><b>Q</b> lines follow. Each line contains two space separated integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> denoting the <b>i<sup>th</sup></b> query.</p>

<h3>Output</h3>
<p>For each test case print <b>Q</b> lines, where each line contains a single integer, denoting the answer to the corresponding query. If it's impossible for Majd to find a dance for the corresponding query, then simply print <b>-1</b>.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 1000</b>.</li>
<li><b>1 ≤ N, Q ≤ 3*10<sup>5</sup></b>.</li>
<li><b>0 ≤ M ≤ 10<sup>9</sup></b>.</li>
<li><b>0 ≤ D<sub>i</sub> ≤ 10<sup>9</sup></b>.</li>
<li>The sum of all <b>N</b> over all test cases doesn't exceed <b>3*10<sup>5</sup></b>.</li>
<li>The sum of all <b>Q</b> over all test cases doesn't exceed <b>3*10<sup>5</sup></b>.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 7 2
1 2 4
1 3
2 3
3 3 3
1 2 3
1 2
1 3
2 2

<b>Output:</b>
3
-1
2
1
-1

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b> The test asks for the smallest dance whose value is <b>greater</b> than or <b>equal </b> to <b> 7 </b>.</p>
<p>The first query asks for the smallest dance which belongs to the interval <b>[1, 3]</b>. The possible dances are:  { <b>[1,1] [1,2] [1,3] [2,2] [2,3] [3,3]</b>}, but only the dance  <b>[1, 3]</b> is valid, whose value is <b>7</b>.</p>
<p>For the second query, there is no valid dance that has a value greater than or equal to <b>7</b>.</p>
<p><b>Example case 2: </b> For the second query, the smallest valid dance is <b>[3,3]</b>.</p>