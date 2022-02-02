---
{"category_name":"challenge","problem_code":"CHMKTRPS","problem_name":"Chef and Making Triples","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"mgch","date_added":"2-08-2015","tags":{"0":"antoniuk1","1":"challenge","2":"greedy","3":"jan16"},"editorial_url":"http://discuss.codechef.com/problems/CHMKTRPS","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/CHMKTRPS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/CHMKTRPS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/CHMKTRPS.pdf">Vietnamese</a> as well.</h3>
<p>Chef has an array <b>A</b> of 3 x <b>N</b> integers. He wants to make as many disjoint triples as possible (a triple is a set of three integers) from this array such that sum of elements in each triple is equal. Two triples <b>(A[a], A[b], A[c])</b> and <b>(A[x], A[y], A[z])</b> are considered disjoint iff the sets <b>{a, b, c}</b> and <b>{x, y, z}</b> are disjoint.</p>
<p>Please, help Chef achieve this task.</p>
<h3>Input</h3>
<p><ul>
<li>The first line of each test file contains a single integer <b>N</b> indicating that the number of elements in the array <b>A</b> is 3 x <b>N</b>.</li>
<li>The second line contains 3 × <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, … , <b>A<sub>3 x N</sub></b>. </li>
</ul>
</p>
<h3>Output</h3>
<ul>
<li>Output two lines as described below.</li>
<ul>
<li>The first line should contain one integer <b>K</b> denoting the number of triples you found.</li>
<li>In the second line you should print <b>K</b> triples of integers — <b>indices</b> of numbers in each triple.</li>
</ul>
</ul>
<h3>Scoring</h3>
<p>Your score for each test case will be the number of triples you found. Your goal is to maximise this score.</p>
<p>Your total score for the problem will be the sum of scores on all the test cases.</p>
<p>Your solution will be tested only on 20% of the test files during the contest and will be rejudged against 100% after the end of competition.</p>
<p>You will get "Wrong Answer" verdict if some element of the array is repeated in your output (triples are not disjoint), or if there are two triples with different sum of elements (invalid triples). If you output only one triple, that's ok, you'll get a score of 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>N</b> = <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 7 2 12 1 11 8 9 4 6 5 10

<b>Output:</b>
3
5 6 11 3 4 1 10 2 9
</pre><h3>Explanation</h3>
<p>In this example we made three triples: (<b>A<sub>5</sub></b>, <b>A<sub>6</sub></b>, <b>A<sub>11</sub></b>) = (1, 11, 5), (<b>A<sub>3</sub></b>, <b>A<sub>4</sub></b>, <b>A<sub>1</sub></b>) = (2, 12, 3) and (<b>A<sub>10</sub></b>, <b>A<sub>2</sub></b>, <b>A<sub>9</sub></b>) = (6, 7, 4). As you can see, 1 + 11 + 5 = 2 + 12 + 3 = 6 + 7 + 4 = 17. So, this output is correct because the sum of numbers in each triple is equal to the same number and there is no element of array that occurs more than once in triples. Score for this testcase will be 3 because you found three triples. Note that this test case can't be in the official test data because <b>N</b> doesn't equal 10<sup>5</sup>.</p>
<h3>Test data generation</h3>
<p>There will be two types of test files.</p>
<ul>
<li>Type #1: We manually choose numbers <b>lo</b> and <b>hi</b>. <b>N</b> will be equal <b>10<sup>5</sup></b>. Each element of an array will be randomly chosen from interval [<b>lo</b>..<b>hi</b>]. </li>
<li>Type #2: We manually choose the number <b>S</b>, <b>lo</b> and <b>hi</b>. <b>N</b> will be equal <b>10<sup>5</sup></b>. Then we generate <b>N</b> random triples with sum of elements equal to <b>S</b> and each element from [<b>lo</b> … <b>hi</b>] , add all those elements to the array and shuffle it. </li>
</ul>
<p>There will be 10 test files of type #1 and 10 test files of type #2. In each test file we can manually change one element (to prevent recognizing type of test file by sum of numbers in it). During the contest, your solutions will be tested on two tests of the first type and two tests of the second type.</p>
<p>Also you can assume that:</p>
<ul>
<li>In 20% of test data: <b>hi</b>-<b>lo</b> ≤ <b>2 * 10<sup>3</sup></b></li>
<li>In 30% of test data: <b>hi</b>-<b>lo</b> ≤ <b>2 * 10<sup>5</sup></b></li>
<li>In 60% of test data: <b>hi</b>-<b>lo</b> ≤ <b>2 * 10<sup>7</sup></b></li>
<li>In 100% of test data: <b>hi</b>-<b>lo</b> ≤ <b>2 * 10<sup>9</sup></b></li>
</ul>
