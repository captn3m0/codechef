---
{"category_name":"challenge","problem_code":"POINTCN","problem_name":"(Challenge) Connecting computers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"1-10-2017","tags":{"0":"challenge","1":"hill","2":"kingofnumbers","3":"mst","4":"oct17"},"editorial_url":"https://discuss.codechef.com/problems/POINTCN","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has decided to start a new software company, the company's building has <b>N</b> offices numbered from 0 to <b>N</b>-1 and there's a computer in each office.
</p>

<p>

All offices' computers should be connected within a single network, so it's required to buy some ethernet cables and hubs. a cable connecting i-th office with j-th office has cost <b>C<sub>i,j</sub></b> also if the i-th office is connected with <b>j</b> other offices then it's required to buy a hub with capacity <b>j</b> and this will cost <b>H<sub>i,j</sub></b>, note that even if the hub with higher capacity is cheaper than the hub with capacity <b>j</b> the company will still buy the hub with capacity <b>j</b>. Each office should have exactly one hub.

</p>

<p>

Find a way for building the network so that all offices are connected to each other directly or indirectly while minimizing the total cost, it's not allowed to connect same pair of offices with more than one cable and it's not allowed to connect an office with itself.</p>

<p>
Your solution is not required to find the most optimal solution. However, the less cost your solution will provide the more points you will get.
</p>




<h3>Input</h3>

<p>Since the input is large you will not be given it directly. Instead, you will be given some parameters and the generator used to generate the input.</p>

<p>
The first line contains a single integer <b>T</b> denoting the number of test-cases</p>

<p>

The first line of each test-case contains the integers <b>N</b>, <b>C<sub>max</sub></b>, <b>H<sub>max</sub></b></p>

<p>
The following 2*<b>N</b> lines, each contain two integers <b>Seed<sub>i,1</sub></b>, <b>Seed<sub>i,2</sub></b> the seeds required for generating the input.</p>

<p>Using one of the generators, <a href="https://codechef_shared.s3.amazonaws.com/download/upload/OCT17/cppgen.cpp">C++ generator</a>, <a href="https://www.codechef.com/viewplaintext/15648975">java generator</a>, <a href="https://codechef_shared.s3.amazonaws.com/download/upload/OCT17/pygen.py">python 2 generator</a> you will get <b>C</b> and <b>H</b> arrays.</p>

<h3>Output</h3>
<p>For each test-case output <b>N</b> lines, each line contains a string of <b>N</b> characters. if you want to connect i-th office and j-th office with a cable then i-th character of j-th line and  j-th character of i-th line both should be '1' otherwise they should be '0'. Note that i-th character of i-th line should always be '0' because you can't connect an office with itself.</p>

<p>
Note that cables information is enough to uniquely determine what hub should be bought for each office.</p>


<h3>Constraints</h3>

<ul>
<li><b>T</b> = <b>5</b></li>
<li><b>N</b> = <b>1000</b></li>
<li><b>0</b> ≤ <b>C<sub>i,j</sub></b> ≤ <b>1,000,000</b></li>
<li><b>0</b> ≤ <b>H<sub>i,j</sub></b> ≤ <b>1,000,000</b></li>
<li> <b>C<sub>i,j</sub></b> = <b>C<sub>j,i</sub></b></li>
<li> <b>C<sub>i,i</sub></b> = <b>0</b></li>
<li><b>0</b> < <b>Seed<sub>i,1</sub></b>, <b>Seed<sub>i,2</sub></b> < <b>10<sup>18</sup></b></li>
</ul>


<h3>Test Generation</h3>
<p>
There will be 10 test-files.</p>

<p>
The cost of a cable is chosen uniformly at random between 0 and <b>C<sub>max</sub></b> and the cost of a hub is chosen uniformly at random between 0 and <b>H<sub>max</sub></b>.</p>
<p>
In each of the 10 test-files there are 5 test-cases, the values of <b>C<sub>max</sub></b> and <b>H<sub>max</sub></b> are:</p>

<ul>
<li><b>First test-case:</b> <b>C<sub>max</sub></b> = 40,000 and <b>H<sub>max</sub></b> = 1,000,000</li>
<li><b>Second test-case:</b> <b>C<sub>max</sub></b> = 100,000 and <b>H<sub>max</sub></b> = 1,000,000</li>
<li><b>Third test-case:</b> <b>C<sub>max</sub></b> = 200,000 and <b>H<sub>max</sub></b> = 1,000,000</li>
<li><b>Fourth test-case:</b> <b>C<sub>max</sub></b> = 500,000 and <b>H<sub>max</sub></b> = 1,000,000</li>
<li><b>Fifth test-case:</b> <b>C<sub>max</sub></b> = 1,000,000 and <b>H<sub>max</sub></b> = 1,000,000</li>
</ul>

<p>
All seeds in input are randomly generated.</p>

</p>



<h3>Scoring</h3>
<p>
You will receive a WA if you didn't follow output format or there is a pair of offices which are not connected.</p>
<p>
 
Your score in a single test-case is equal to the cost of the network outputed in that test-case, your overall score is the sum of scores of all test-cases in all test-files.</p>

<p>
During contest you will be able to get your score on first 2 test-files. After contest there will be rejudge on full tests set.
</p>


</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
4 10 20
123456789012 4567890123456
11111111111111 2222222222222
101010101010 2323232323232
112358132134 1928374655647
999999555555 5555559999999
234123124155 1241352352345
234213515123 1231245551223
523432523332 1234124515123

<b>Output:</b>
0111
1000
1000
1000
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> note that the example doesn't follow constraints on <b>T</b> and <b>N</b> and also seeds are set by hand in this sample.</p>

<p>
In this example we have the array C:</p>

<pre>
0 0 7 6
0 0 2 7
7 2 0 7
6 7 7 0
</pre>
<p>
and the array H</p>

<pre>
9 10 2 0
7 9 0 7
9 3 15 18
10 3 20 5
</pre>

<p>
In the output, first office is connected all other offices and that will make the cost of the network equal to <b>S</b> = 0 + 7 + 6 + 0 + 9 + 3 + 3 = 28, so the score on this test-case is 28.


</p>