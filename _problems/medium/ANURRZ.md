---
{"category_name":"medium","problem_code":"ANURRZ","problem_name":"Random Rudreshwar","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xiaodao","date_added":"6-01-2015","tags":{"0":"anudeep2011","1":"cook54","2":"dynamic","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/ANURRZ","time":{"view_start_date":1421609400,"submit_start_date":1421609400,"visible_start_date":1421609400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/mandarin/ANURRZ.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/russian/ANURRZ.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>Rudreshwar likes random numbers and random arrays. Today Rudreshwar started playing with a couple of Arrays <b>A</b> and <b>B</b>, each of size <b>N</b>.</p>
<p>Initially <b>A</b> is filled with zeros. Rudreshwar filled <b>B</b> with random numbers.</p>
<p>Rudreshwar visits each index <b>i</b> (1 &lt;= <b>i</b> &lt;= <b>N</b>) in random order. When at <b>i</b>, he selects another random index <b>j</b> such that <b>j</b> is greater or equal to <b>i</b>. He then increments <b>A[i]</b>, <b>A[i+1]</b>, <b>A[i+2]</b> ... <b>A[j]</b> by 1.</p>
<p>Finally if for any index <b>i</b>, <b>A[i]</b> is greater than <b>B[i]</b>, he then throws away that array <b>A</b></p>
<p>For a given <b>B</b>, calculate the number of different arrays <b>A</b>, that Rudreshwar can end up with. Two arrays are called different if there exists an index where the arrays have different values</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. First line of each test case contains an integer <b>N</b>. Second line contains <b>N</b> space separated integers representing the array <b>B</b></p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required answer modulo 1000000007.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>B[i]</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
2 2
3
1 1 1

<b>Output:</b>
2
1
</pre><h3>Explanation</h3>
<p><b>Test case 1</b></p>
<p>{1, 1} and {1, 2} are valid.</p>
<p><b>Test case 2</b></p>
<p>{1, 1, 1} is the only possible final array A.</p>
