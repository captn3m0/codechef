---
{"category_name":"challenge","problem_code":"CHMTDV","problem_name":"Chef and Matrix Division","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"dpraveen","date_added":"29-07-2015","tags":{"0":"antoniuk1"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/CHMTDV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/CHMTDV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/CHMTDV.pdf">Vietnamese</a> as well.</h3>

<p>Chef has <b>n</b> × <b>n</b> array <b>A</b> of non-negative integers. He wants to divide this array by <b>p</b>-1 horizontal dividers and <b>p</b>-1 vertical dividers into <b>p<sup>2</sup></b> blocks such that maximum sum of elements of each block will be the smallest. </p>

<p>More formally, Chef want to choose <b>p</b>-1 horizontal dividers 0 = <b>h<sub>0</sub></b> &lt; <b>h<sub>1</sub></b> &lt; ... &lt; <b>h<sub>p</sub></b> = <b>n</b> and  <b>p</b>-1 vertical dividers 0 = <b>v<sub>0</sub></b> &lt; <b>v<sub>1</sub></b> &lt; ... &lt; <b>v<sub>p</sub></b> = <b>n</b> to minimize the next value: </p>

<img src="https://www.codechef.com/download/upload/SEPT16/4.jpg" alt="formula" width="400" height = "100" hspace = "70">
</p>

<h3>Input</h3>
<ul>
<li>The first line of each test file contains two space-separated integers <b>n</b> and <b>p</b> denoting the size of array <b>A</b> and the number of horizontal and vertical dividers.</li>
<li>Each of next <b>n</b> lines contains <b>n</b> space-separated integers <b>A<sub>i, 1</sub></b>, <b>A<sub>i, 2</sub></b>, ..., <b>A<sub>i, n</sub></b> denoting the <b>i<sup>th</sup></b> row of the array <b>A</b>. </li>
</ul>

<h3>Output</h3>
<li>The first line of output should contain <b>p</b>-1 space-separated integers <b>h<sub>1</sub></b>, <b>h<sub>2</sub></b>, ... <b>h<sub>p-1</sub></b> denoting the horizontal dividers.</li>

<li>The second line of output should contain <b>p</b>-1 space-separated integers <b>v<sub>1</sub></b>, <b>v<sub>2</sub></b>, ... <b>v<sub>p-1</sub></b> denoting the vertical dividers.</li>
</ul>

<h3>Scoring</h3>
<p>Your score for each test case will be calculated by formula described above. Your goal is to minimize this score.</p>
<p>Your total score for the problem will be the sum of scores on all the test cases.</p>
<p>Your solution will be tested only on <b>20</b>% of the test files during the contest and will be rejudged against <b>100</b>% after the end of competition.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>p</b> ≤ <b>n</b> ≤ <b>500</b> </li>
<li><b>1</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>10<sup>9<sup></b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 3
1 1 2 2
2 1 2 2
3 1 4 2
4 4 2 2

<b>Output:</b>
2 3
1 3
</pre>

<h3>Explanation</h3>
<p>As you can see at the picture below, this array is divided into <b>p<sup>2</sup></b> = 9 blocks by <b>p</b>-1 horizontal(red lines) and <b>p</b>-1 vertical(green lines) dividers. Also there are two vertical (<b>v<sub>0</sub></b> = 0 and <b>v<sub>3</sub></b> = 4) dividers and two horizontal (<b>h<sub>0</sub></b> = 0 and <b>h<sub>3</sub></b> = 4) for better understanding of this division.</p>

<img src="https://www.codechef.com/download/upload/SEPT16/5.jpg" alt="example" width="300" height = "300" hspace = "90">

<p>Your score for this test case will be 6 / (4 / 3)<sup>2</sup> (there are two blocks with sum of elements 6).</p>
<p>This test case won't be in the test data because <b>n</b> ∉ [450..500]. It just for let you understand how scoring works. Also there are another ways to divide this array into 9 parts. All of them will be accepted, but with different scores. </p>

<h3>Test data generation</h3>
<p>There will be 20 test files.</p>
<p>For each test file the number <b>n</b> is chosen from the range [450..500] with equal probability. All elements of <b>A</b> are also chosen randomly. For each test case <b>p</b> will be manually selected. </p>