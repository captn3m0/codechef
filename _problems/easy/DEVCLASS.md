---
{"category_name":"easy","problem_code":"DEVCLASS","problem_name":"Devu and his Class","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"laycurse","date_added":"23-12-2014","tags":{"0":"ad","1":"admin2","2":"easy","3":"greedy","4":"march15"},"editorial_url":"http://discuss.codechef.com/problems/DEVCLASS","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/DEVCLASS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/DEVCLASS.pdf">Russian</a>.</h3>
<p>Devu is a class teacher of a class of <b>n</b> students. One day, in the morning prayer of the school, all the students of his class were standing in a line. You are given information of their arrangement by a string <b>s</b>. The string <b>s</b> consists of only letters <b>'B'</b> and <b>'G'</b>, where <b>'B'</b> represents a boy and <b>'G'</b> represents a girl.</p>
<p>Devu wants inter-gender interaction among his class should to be maximum. So he does not like seeing two or more boys/girls standing nearby (i.e. continuous) in the line. e.g. he does not like the arrangements <b>BBG</b> and <b>GBB</b>, but he likes <b>BG</b>, <b>GBG</b> etc.</p>
<p>Now by seeing the initial arrangement <b>s</b> of students, Devu may get furious and now he wants to change this arrangement into a likable arrangement. For achieving that, he can swap positions of any two students (not necessary continuous). Let the cost of swapping people from position <b>i</b> with position <b>j</b> (<b>i ≠ j</b>) be <b>c(i, j)</b>. You are provided an integer variable <b>type</b>, then the cost of the the swap will be defined by <b>c(i, j) = |j − i|<sup>type</sup></b>.
</p><p>Please help Devu in finding minimum cost of swaps needed to convert the current arrangement into a likable one.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases are follow.</p>
<p>The first line of each test case contains an integer <b>type</b>, denoting the type of the cost function. Then the next line contains string <b>s</b> of length <b>n</b>, denoting the initial arrangement <b>s</b> of students.</p>
<p>Note that the integer <b>n</b> is not given explicitly in input.</p>
<h3>Output</h3>
<p>For each test case, print a single line containing the answer of the test case, that is, the minimum cost to convert the current arrangement into a likable one. If it is not possible to convert the current arrangement into a likable one, then print <b>-1</b> instead of the minimum cost.</p>
<h3>Constraints and Subtasks</h3>
<p><b>Subtask 1: 25 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>type = 0</b></li>
<li>Sum of <b>n</b> over all the test cases in one test file does not exceed <b>10<sup>6</sup>.</b>
</li></ul>
<p> </p>
<p><b>Subtask 2: 25 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>type = 1</b></li>
<li>Sum of <b>n</b> over all the test cases in one test file does not exceed <b>10<sup>6</sup>.</b>
</li></ul>
<p> </p>
<p><b>Subtask 3: 25 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>type = 2</b></li>
<li>Sum of <b>n</b> over all the test cases in one test file does not exceed <b>10<sup>6</sup>.</b>
</li></ul>
<p> </p>
<p><b>Subtask 4: 25 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>2</sup></b></li>
<li><b>1 ≤ n ≤ 10<sup>3</sup></b></li>
<li><b>type</b> can be <b>0</b>, <b>1</b> or <b>2</b>, that is <b>type ∈ {0, 1, 2}</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
8
0
BB
0
BG
0
BBGG
1
BGG
1
BGGB
1
BBBGG
2
BBGG
2
BGB

<b>Output:</b>
-1
0
1
1
1
3
1
0
</pre><h3>Explanation</h3>
<p>Note <b>type</b> of the first <b>3</b> test cases is <b>0</b>. So <b>c(i, j) = 1</b>. Hence we just have to count minimum number of swaps needed.</p>
<p><b>Example case 1.</b> There is no way to make sure that both the boys does not stand nearby. So answer is <b>-1</b>.</p>
<p><b>Example case 2.</b> Arrangement is already valid. No swap is needed. So answer is <b>0</b>.</p>
<p><b>Example case 3.</b> Swap boy at position <b>1</b> with girl at position <b>2</b>. After swap the arrangement will be <b>BGBG</b> which is a valid arrangement. So answer is <b>1</b>.</p>
<p>Now <b>type</b> of the next <b>3</b> test cases is <b>1</b>. So <b>c(i, j) = |j − i|</b>, that is, the absolute value of the difference between <b>i</b> and <b>j</b>.</p>
<p><b>Example case 4.</b> Swap boy at position <b>0</b> with girl at position <b>1</b>. After swap the arrangement will be <b>GBG</b> which is a valid arrangement. So answer is <b>|1 - 0| = 1</b>.</p>
<p><b>Example case 5.</b> Swap boy at position <b>0</b> with girl at position <b>1</b>. After swap the arrangement will be <b>GBGB</b> which is a valid arrangement. So answer is <b>|1 - 0| = 1</b>.</p>
<p><b>Example case 6.</b> Swap boy at position <b>1</b> with girl at position <b>4</b>. After swap the arrangement will be <b>BGBGB</b> which is a valid arrangement. So answer is <b>|4 - 1| = 3</b>.</p>
<p>Then <b>type</b> of the last <b>2</b> test cases is <b>2</b>. So <b>c(i, j) = (j − i)<sup>2</sup></b></p>
<p><b>Example case 7.</b> Swap boy at position <b>1</b> with girl at position <b>2</b>. After swap the arrangement will be <b>BGBG</b> which is a valid arrangement. So answer is <b>(2 - 1)<sup>2</sup> = 1</b>.</p>
<p><b>Example case 8.</b> Arrangement is already valid. No swap is needed. So answer is <b>0</b>.</p>
