---
{"category_name":"challenge","problem_code":"CHNGSS","problem_name":"Chef and Number Guessing","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":null,"date_added":"31-01-2016","tags":{"0":"antoniuk1","1":"binary","2":"challenge","3":"march16"},"editorial_url":"http://discuss.codechef.com/problems/CHNGSS","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/CHNGSS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/CHNGSS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/CHNGSS.pdf">Vietnamese</a> as well.</h3>
<p>Chef has a rectangular matrix <b>A</b> of <b>n</b>x<b>m</b> integers. Rows are numbered by integers from 1 to <b>n</b> from top to bottom, columns - from 1 to <b>m</b> from left to right. <b>A<sub>i, j</sub></b> denotes the j-th integer of the i-th row.</p>
<p>Chef wants you to guess his matrix. To guess integers, you can ask Chef questions of next type: "How many integers from submatrix <b>i<sub>L</sub></b>, <b>i<sub>R</sub></b>, <b>j<sub>L</sub></b>, <b>j<sub>R</sub></b> are grater than or equal to <b>x</b> and less than or equal to <b>y</b>?". By submatrix <b>i<sub>L</sub></b>, <b>i<sub>R</sub></b>, <b>j<sub>L</sub></b>, <b>j<sub>R</sub></b> we mean all elements <b>A<sub>i, j</sub></b> for all <b>i<sub>L</sub></b> ≤ <b>i</b> ≤ <b>i<sub>R</sub></b> and <b>j<sub>L</sub></b> ≤ <b>j</b> ≤ <b>j<sub>R</sub></b>. </p>
<p>Also Chef can answer not more than <b>C</b> questions of next type: "What is the sum of integers from submatrix <b>i<sub>L</sub></b>, <b>i<sub>R</sub></b>, <b>j<sub>L</sub></b>, <b>j<sub>R</sub></b>?"</p>
<p>As soon as you think you know the Chefs matrix, you can stop asking questions and tell to the Chef your variant of the matrix. Please see "Scoring" part to understand how your solution will be evaluated. </p>

<h3>Input</h3>
<p>The first line of the input contains three space-separated integers <b>n</b>, <b>m</b> and <b>C</b> denoting the sizes of the matrix and the maximum number of the second-type questions. After that the judge will answer your questions and evaluate the resuts. Read more about that in the "Interaction with the judge" part of the statement. </p>

<h3>Interaction with the judge</h3>
<p>To ask a first-type question you should print to the standard output one line containing seven space-separated integers <b>1 i<sub>L</sub> i<sub>R</sub> j<sub>L</sub> j<sub>R</sub> x y</b>. To ask a second-type question you should print one line containing five space-separated integers <b>2 i<sub>L</sub> i<sub>R</sub> j<sub>L</sub> j<sub>R</sub></b>. After that you should read from the standard input one integer - answer to the question. To end the game you should print 3 and starting from next line print <b>n</b> lines, each of them contains <b>m</b> space-separated integers - your variant of the matrix <b>A</b>. After that your program must stop. Remember to <b>flush</b> the output after every line you print.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b>, <b>m</b> ≤ <b>2.5 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> * <b>m</b> ≤ <b>2.5 * 10<sup>5</sup></b></li>
<li><b>10<sup>3</sup></b> ≤ <b>C</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>i<sub>L</sub></b> ≤ <b>i<sub>R</sub></b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>j<sub>L</sub></b> ≤ <b>j<sub>R</sub></b> ≤ <b>m</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>y</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ number of asked questions ≤ <b>5 * 10<sup>5</sup></b>
</li><li><b>1</b> ≤ <b>B<sub>i, j</sub></b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, <b>a<sub>3</sub></b> ≤ <b>10</b></li>

</ul>

<h3> Scoring </h3>
<p>Let <b>B</b> will be the matrix you output and <b>diff</b> = <b>∑ |A<sub>i, j</sub> - B<sub>i, j</sub>|</b> for all <b>1</b> ≤ <b>i</b> ≤ <b>n</b>, <b>1</b> ≤ <b>j</b> ≤ <b>m</b>. The number of questions you asked is <b>questions</b>. The number of integers, you correctly guessed is <b>correct</b>(i. e. the number of elements <b>i, j</b> such that <b>A<sub>i, j</sub> = B<sub>i, j</sub></b>). </p>
<p>The score for each test case will be: <b>score</b> = <b>a<sub>1</sub></b> * <b>questions</b> +  <b>a<sub>2</sub></b> * <b>diff</b> +  <b>a<sub>3</sub></b> * (<b>n</b> * <b>m</b> - <b>correct</b>).</p>
<p>Your goal is to minimize this score.</p>
<p>Your total score for the problem will be the sum of scores on all the test cases.</p>

<h3>Example</h3>
<pre><b>Input:</b>
3 3 10
4
0
3
1
6

<b>Output:</b>
1 1 2 1 2 1 3
1 3 3 1 3 1 1
1 3 3 1 3 2 2
1 1 2 3 3 1 1
2 3 3 1 3
3
2 2 1
2 2 1
2 2 2

</pre>
<h3>Explanation</h3>
<pre>
<b>
       [1, 2, 3]
A = [3, 2, 1]
       [2, 2, 2]
</b>
</pre><p>For this test case <b>a<sub>1</sub></b> = 1, <b>a<sub>2</sub></b> = 1 and <b>a<sub>3</sub></b> = 1.</p>
<p>The score for this test case will be 1 * 5 + 1 * 4 + 1 * (9 - 6) = 12.</p>

<h3> Test data generation </h3>
<p>There will be four types of the test files.</p>
<ul>
<li>Type #1: <b>n</b> = <b>10</b>,  <b>m</b> = <b>25000</b></li>
<li>Type #2: <b>n</b> = <b>100</b>,  <b>m</b> = <b>2500</b></li>
<li>Type #3: <b>n</b> = <b>250</b>,  <b>m</b> = <b>1000</b></li>
<li>Type #4: <b>n</b> = <b>500</b>,  <b>m</b> = <b>500</b></li>
</ul>
<p>There will be 5 test files of each type. During the contest, you will be shown the score for only one test file of each type.</p>
<p>All elements of matrix <b>A</b> are randomly chosen.</p>
<p>For each test case <b>C</b> is randomly chosen from interval [10<sup>3</sup> .. 10<sup>4</sup>].</p>
<p>For each test case values <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b> and <b>a<sub>3</sub></b> are manually chosen. </p>

