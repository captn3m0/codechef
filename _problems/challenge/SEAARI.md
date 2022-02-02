---
{"category_name":"challenge","problem_code":"SEAARI","problem_name":"Sereja and Progressions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"alex_2oo8","date_added":"7-09-2013","tags":{"0":"sereja"},"time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/SEAARI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/SEAARI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/SEAARI.pdf">Vietnamese</a> as well.</h3>

<p>Sereja likes <a href="https://en.wikipedia.org/wiki/Arithmetic_progression">arithmetic progressions</a> a lot. An infinite arithmetic progression <b>(a, r)</b> is determined by its initial term and difference of consecutive terms, denoted by <b>a, r</b> respectively.</p>

<p>He defines <i>mutual attraction</i> of some array <b>A</b> of size <b>N</b> with an infinite arithmetic progression <b>(a, r)</b>, as <b>|A<sub>1</sub> - a| + |A<sub>2</sub> - (a + r)| + .. + |A<sub>i</sub> - (a + r * (i - 1)| + .. + |A<sub>N</sub> - (a + r * (N - 1)|</b>, where <b>|x|</b> denotes <a href="https://en.wikipedia.org/wiki/Absolute_value">absolute value</a> of <b>x</b>.</p>

<p>He has an array <b>A</b> of size <b>N</b> with him. He wants to find some infinite arithmetic progression with which its <i>mutual attraction</i> is minimized. Also, he is allowed to perform following operations on this array. 

<ol>
<li>Swap operation: Take any two indices <b>i, j</b> of the array <b>A</b>, and swap <b>A<sub>i</sub></b>, <b>A<sub>j</sub></b></li>
<li>Delete operation: Delete some element of the array <b>A</b>. Please note that after the deletion, the indices of array are not re-enumerated or re-adjusted.</li>
</ol>
</p>

<p>So, you have to help Sereja in deciding how these operations should be performed on <b>A</b> and also in finding the parameters <b>(a, r)</b> of the infinite arithmetic progression. Note that Sereja can perform at max <b>K</b> swap operations and <b>D</b> delete operations.</p>

<h3>Scoring</h3>
<p>For each test file, there will be a single test case.</p>
<p>Your score for a single test file will be <i>mutual attraction</i> of the modified array <b>A</b> and the infinite arithmetic progression provided by you, divided by the initial size of array <b>N</b>. Your target is to minimize the score.</p>

<h3>Input</h3>
<p>There will be a single test case.</p>
<p>First line of input contains three space separated integers <b>N, K, D</b>.</p>
<p>Next line contains <b>N</b> space separated integers denoting array <b>A</b>.</p>

<h3>Output</h3>
<p>You can print at max <b>K + D + 2</b> lines.</p>
<p>In the first line, print two space separated real numbers denoting <b>a, r</b>, satisfying the constraints as mentioned in constraints section.</p>
<p>Then, you can print at max <b>K + D</b> lines, with each line having one of the following two formats.
<ul>
<li>Swap operation = <b>1 i j</b>: i.e., 1 followed by the indices that you want to swap.</li>
<li>Delete operation = <b>2 i</b>: i.e., 2 followed by index you want to delete.</li>
</ul>
</p>
<p>
Please end your output by printing -1 in a separate line.
</p>
<p>Please note that you should ensure that indices that you are trying to swap or delete actually exist, otherwise you will get a WA verdict. The indices should be 1 based. Also note that after the deletion operation, the indices are <b>not</b> re-enumerated. Please see example input/output section for more details. Also note that if you make more than <b>K</b> swaps or more than <b>D</b> deletions, you will get a WA verdict.
</p>

<h3>Constraints</h3>
<ul>
<li><b>-10<sup>9</sup> ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></li>
<li><b>-10<sup>10</sup> ≤ a, r ≤ 10<sup>10</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 1 1
1 2 3

<b>Output:</b>
0 1
2 1
1 2 3
-1
</pre>

<h3>Explanation</h3>
<p>In this case, the array <b>A</b> is <b>[1, 2, 3]</b>. Sereja can perform at max one swap and at max one deletion operation.</p>
<p>He first delete index 1, the new array becomes <b>[1, 2, 3]</b>, in which index 1 is deleted.</p>
<p>After that he makes a swap operation between index 2 and 3. So, at the end the array will be [1 3 2], where the index 1 is deleted.</p>
<p>In the end, the non-deleted elements in the array will be [3, 2]. The <i>Mutual attraction</i> of this array with infinite arithmetic progression (0, 1) will be |3 - 0| + |2 - 1| = 4. So, he will get a score of 4 / 3 = 1.3333. </p>

<h3>Test Generation Scheme</h3>
<p>There are total 20 test files and four groups of test files, i.e. 5 test files per group. During the contest, score of your program will be decided by only 20% of the files, i.e. by 4 files, each from one group. However verdict of your program will be based on all the test files, i.e. in order to get an AC, your program should work correctly on all the test files.</p>

<p>
<ul>
<li>Group 1: <b>N = 100, K = 20, D = 10</b></li>
<li>Group 2: <b>N = 10<sup>3</sup>, K = 300, D = 100</b></li>
<li>Group 3: <b>N = 10<sup>4</sup>, K = D = 2000</b></li>
<li>Group 4: <b>N = 10<sup>5</sup>, K = D = 30000</b></li>
</ul>
</p>

<p>
The array <b>A</b> will be generated uniformly randomly.
</p>