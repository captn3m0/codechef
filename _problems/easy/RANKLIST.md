---
{"category_name":"easy","problem_code":"RANKLIST","problem_name":"Let us play with rank list","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chandubaba","problem_tester":"pushkarmishra","date_added":"9-01-2015","tags":{"0":"chandubaba","1":"feb15","2":"greedy"},"editorial_url":"http://discuss.codechef.com/problems/RANKLIST","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/RANKLIST.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/RANKLIST.pdf">Russian</a>.</h3>
<p>A <b>rank list</b> is a list of ranks of persons in a programming contest. Note that some of the persons might be having same rank. {1, 2}, {1, 2, 2} and {1, 1, 2, 3, 4, 4} are few examples of rank lists whereas {1, 3}, {0, 2}, {1, 2, 4} are not rank lists.<br />
Also note that a rank list need not to be sorted e.g. {2, 2, 1} and {3, 3, 2, 1} are valid rank lists.
</p>
<p>Mathematically, a <b>rank list</b> is an array of numbers when sorted will have the starting element as 1 and difference between any two consecutive elements less than or equal to 1. </p>
<p>A rank list is said to be an <b>ideal rank list</b> if no two persons gets equal rank in it. </p>
<p>You can convert any rank list into an ideal rank list by applying following operations. In a single operation, you can change value of any one element of the rank list to any value. </p>
<p>Chandan now wonders about minimum number of operations needed to convert a rank list of size <b>n</b> with sum of its element equal to <b>s</b> in to an ideal rank list. Please help Chandan find this minimum number of operations needed to create an ideal rank list.
</p>
<p>Note that you are guaranteed that values of <b>n, s</b> will be given in such a way that there will exist a valid rank list.</p>
<h3>Input</h3>
<p>First line of input will give an integer <b>T</b> denoting number of test cases.<br />
Then for next <b>T</b> lines, each line will contain two space separated integers <b>n, s</b>. </p>
<h3>Output</h3>
<p>For each test case, print a single line containing a single integer corresponding to the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>s</b> ≤ <b>10^10</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1
3 6
3 5
3 3

<b>Output:</b>
0
0
1
2

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
Only possible rank list in this case is {1}, As it is already an ideal rank list, hence you need zero operations.
</p>
<p><b>Example case 2.</b><br />
Only possible rank list in this case is {1 2 3}, As it is already an ideal rank list, hence you need zero operations.
</p>
<p><b>Example case 3.</b><br />
One of the possible rank list is {1 2 2}, You can convert it into an ideal rank list by changing any 2 to 3 i.e. {1, 2, 3}, hence you need one operations.
</p>
<p><b>Example case 4.</b><br />
Only possible rank list is {1 1 1}, You can convert it into an ideal rank list by changing a 1 to 2 and another 1 to 3 i.e. {1, 2, 3}, hence you need two operations.
</p>
