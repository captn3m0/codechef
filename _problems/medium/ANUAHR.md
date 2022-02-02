---
{"category_name":"medium","problem_code":"ANUAHR","problem_name":"Abhijeet and rectangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xiaodao","date_added":"15-01-2015","tags":{"0":"anudeep2011","1":"cook54","2":"data","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/ANUAHR","time":{"view_start_date":1421609400,"submit_start_date":1421609400,"visible_start_date":1421609400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/mandarin/ANUAHR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/russian/ANUAHR.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>Abhijeet loves to play with rectangles. Today he has <b>N</b> rectangles of various sizes with him. He started to arrange them on the coordinate plane such that the area of intersection is maximized. However, he never rotated the rectangles he had, he only moved them here and there.</p>
<p>Abhijeet soon realized that the game was boring and decided to introduce a modification. He decided to remove atmost <b>M</b> of those rectangles and arrange others on coordinate plane such that the area of intersection is maximized.</p>
<p>Given the dimensions of <b>N</b> rectangles and <b>M</b>, can you answer maximum possible area of intersection with above rules?</p>
<p><b>Note:</b> If all the rectangles are removed, the area of intersection is considered as 0.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.First line of each test case has two integer <b>N</b> and <b>M</b>. <b>N</b> lines follow, each has two integers representing the length and breadth of the rectangle.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Rectangle Dimensions</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>Sum of N over all test cases</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1
10 10
2 0
5 10
5 5
2 1
1 1
2 2

<b>Output:</b>
100
25
4
</pre><h3>Explanation</h3>
<p><b>Example case 1</b></p>
<p>Abhijeet has only one rectangle. He can remove it, but then the area will be 0. Optimal way is not to remove it. Area = 10 * 10 = 100</p>
<p><b>Example case 2</b></p>
<p>Abhijeet cannot remove any rectangles in this case. He can however, place them such that the smaller 5 by 5 rectangle is completely inside the larger 5 by 10 rectangle. Then the area of intersection is 5 * 5 = 25</p>
<p><b>Example case 3</b></p>
<p>Abhijeet can remove atmost 1 rectangles in this case. He can remove the smaller rectangle of size 1 by 1. He is then left with 2 by 2 rectangle of area 4.</p>
