---
{"category_name":"school","problem_code":"TRISQ","problem_name":"Fit Squares in Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"anudeep2011","date_added":"24-12-2014","tags":{"0":"cakewalk","1":"cook55","2":"devuy11","3":"geometry","4":"recursion"},"editorial_url":"http://discuss.codechef.com/problems/TRISQ","time":{"view_start_date":1424025000,"submit_start_date":1424025000,"visible_start_date":1424025000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/mandarin/TRISQ.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/russian/TRISQ.pdf">Russian</a> as well.</h3>
<p>
What is the maximum number of squares of size <b>2x2</b> that can be fit in a right angled isosceles triangle of base <b>B</b>.<br /><br />
One side of the square must be parallel to the base of the isosceles triangle.<br /><br />
Base is the shortest side of the triangle<br />
</p>
<h3>Input </h3>
<p>First line contains <b>T</b>, the number of test cases.<br /><br />
Each of the following <b>T</b> lines contains 1 integer <b>B</b>.<br /></p>
<h3>Output</h3>
<p>Output exactly T lines, each line containing the required answer.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10<sup>3</sup><br /><br />
1 ≤ <b>B</b> ≤ 10<sup>4</sup><br /></p>
<pre>
<h3>Sample Input</h3>
11
1
2
3
4
5
6
7
8
9
10
11
<h3>Sample Output </h3>
0
0
0
1
1
3
3
6
6
10
10
</pre>