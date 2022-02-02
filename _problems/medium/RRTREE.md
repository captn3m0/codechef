---
{"category_name":"medium","problem_code":"RRTREE","problem_name":"Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"utkarsh_lath","date_added":"14-09-2013","tags":{"0":"Rubanenko","1":"bit","2":"cook38","3":"hard","4":"heavy","5":"segtree","6":"tree"},"editorial_url":"http://discuss.codechef.com/problems/RRTREE","time":{"view_start_date":1379874600,"submit_start_date":1379874600,"visible_start_date":1379874600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a tree that is built in a following way: initially there is single vertex <b>1</b>. All the other vertices are added one by one, from vertex <b>2</b> to vertex <b>N</b>, by connecting it to one of those that have been added before. You are to find the <i>diameter</i> of the tree after adding each vertex. Let the distance between vertex <b>u</b> and <b>v</b> be the minimal number of edges you have to pass to get from <b>u</b> to <b>v</b>, then <i>diameter</i> is the maximum distance between any two pairs <b>(u,v)</b> that have already been added to the tree.</p>
<h3>Input</h3>
<p>The input consists of several Test cases. The file line of input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow.<br />
The first line of each test case contains an integer <b>N</b>, then <b>N-1</b> lines follow: <b>ith</b> line contains an integer <b>P<sub>i</sub></b>, which means that vertex <b>i+1</b> is connected to the vertex <b>P<sub>i</sub></b>. </p>
<h3>Output</h3>
<p>For each test case, output <b>N-1</b> lines - the diameter after adding vertices <b>2, 3,..,N</b></p>
<p><h3>Constraints</h3>
<ul>
<b></b></ul></p>
<li> 1 ≤ T ≤ 15
</li><li> 1 ≤ N ≤ 10<sup>5</sup>
</li><li> P<sub>i</sub> ≤ i 
</li><li> Sum of <b>N</b> over all test cases in a file does not exceed <b>2 * 10<sup>5</sup></b>


<h3>Example</h3>
<pre><b>Input:</b>
2
3
1
1
5
1
2
3
3

<b>Output:</b>
1
2
1
2
3
3
</pre></li>