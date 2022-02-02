---
{"category_name":"easy","problem_code":"GERMANDE","problem_name":"Gerrymander","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"9-02-2017","tags":{"0":"admin2"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> The country of BitLand is divided into <b>N</b> districts, and these districts are arranged in a circle: <b>1, 2, 3, ..., N</b>, where <b>i</b> and <b>i+1</b> are adjacent for all <b>1 ≤ i ≤ N-1</b>, and also <b>1</b> and <b>N</b> are adjacent. It is given that <b>N = o<sub>1</sub> * o<sub>2</sub></b>, where <b>o<sub>1</sub></b> and <b>o<sub>2</sub></b> are odd integers.
</p>

<p>
There are only 2 political parties in BitLand: the Zeros and the Ones. There was an election, in which each district chose it's representative who is either a Zero or a One. We know this data. i.e. for each of the <b>N</b> districts, we know whether their representative is a Zero or a One.
</p>

<p>
The <b>N</b> districts should be partitioned into <b>o<sub>1</sub></b> states, where each state consists of <b>o<sub>2</sub></b> consecutive districts.
<br \>
For example, if <b>o<sub>1</sub> = 5</b> and <b>o<sub>2</sub>=3</b>, then <b>N=15</b>, and {1,2,3} would be a valid state. {2,3,4}, {13,14,15}, {14,15,1}, {15,1,2} are other examples of valid states. But {3,5,6} is not a valid state, because the districts are not consecutive.
</p>

<p>
A state gets a One Governor if, among all the <b>o<sub>2</sub></b> district representatives belonging to it, there are more One district representatives than Zero representatives. And it gets a Governor who is from the Zero party, if the majority of its district representatives are from the Zero party. And because <b>o<sub>2</sub></b> is odd, there will be no ties.
</p>

<p>
The President of BitLand will be a One if the majority of the <b>o<sub>1</sub></b> state Governors are Ones. Otherwise, the President will be from the Zero party.
</p>

<p>
But the state boundaries have not been fixed yet. Given just the district-wise data (i.e. whether each district's representative is a Zero or a One), you need to find if there is a way to partition them into states such that the President is a One.
</p>



<h3>Input</h3>

<ul>
<li>The first line contains one integer, <b>T</b>, which is the number of testcases.
<li>The first line of each testcase contains two space separated integers, <b>o<sub>1</sub></b> and <b>o<sub>2</sub></b>, which are the number of states, and number of districts in each state, respectively.
</li>
<li>The next line of each testcase contains <b>N = o<sub>1</sub> * o<sub>2</sub></b> space separated integers: <b>d<sub>1</sub>, d<sub>2</sub>, .., d<sub>N</sub></b>. If <b>d<sub>i</sub></b> is <b>1</b>, then it signifies that District <b>i</b> has chosen a One representative. If <b>d<sub>i</sub></b> is <b>0</b>, then they have a Zero representative.</li>
</ul>
<p> </p>

<h3>Output</h3>
<ul>
<li>Each testcase should be in a new line, and should contain <b>1</b>, if the President can be a One, and <b>0</b> otherwise.</li>
</ul>
<p> </p>



<h3>Constraints</h3>
<p>For all subtasks you may assume that: 
<ul>
<li>
<b>1 ≤ T ≤ 100</b>
</li>
<li><b>o<sub>1</sub>,o<sub>2</sub></b> will be odd positive integers.</li>

<li><b>1 ≤</b> Summation of <b>o<sub>1</sub>*o<sub>2</sub></b> over all testcases <b>≤ 10<sup>6</sup></b></li>
<li><b>0 ≤ d<sub>i</sub> ≤ 1</b></li>
</ul>

<p>
<b>Subtask 1</b>: For 10% of the score,
<ul>
<li><b>1 ≤</b> Summation of <b>o<sub>1</sub>*o<sub>2</sub></b> over all testcases <b>≤ 10<sup>4</sup></b></li>

</ul>
</p>

<p>
<b>Subtask 2</b>: For further 20% of the score,
<ul>
<li>
<b>1 ≤ o<sub>1</sub> ≤ 10<sup>4</sup></b>
</li>
<li>
<b>1 ≤ o<sub>2</sub> ≤ 10<sup>2</sup></b>
</li>
</ul>
</p>


<p>
<b>Subtask 3</b>: For further 70% of the score,
<ul>
<li>
No further constraints.</li>
</ul>
</p>


<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
5 1
1 0 0 1 1
3 3
0 0 1 1 0 1 1 0 0
3 3
1 1 1 0 1 0 0 1 0
3 3
1 0 0 1 1 0 1 0 0

<b>Output:</b>
1
1
1
0
</pre>
<p> </p>
<h3>Explanation</h3>

<p>
In the first testcase, each state should have only 1 district, and hence, there is no actual choice in constructing the states. There will be three One Governors, and two Zero Governors, and hence the President will be a One.
</p>

<p>
In the second testcase, each of the three states should should have 3 districts each. Consider the following partitioning of the districts into states: {2,3,4}, {5,6,7} and {8,9,1}. So, the first state consists of the districts {2,3,4}, and the representatives of these correspond to {0,1,1}. The majority is One, and hence the first state will have a One Governor. The representatives corresponding to the second state are {0,1,1}, and so again, this will have a One Governor. The third state has representatives {0,0,0}, and hence will have a Zero Governor. On the whole, there are two One Governors, and one Zero Governor, and hence the President will be a One. And since there is a way to partition the districts into states, in which the President is a One, the answer is 1.
</p>

<p>
In the third testcase, each of the three states should should have 3 districts each. Consider the following partitioning of the districts into states: {3,4,5}, {6,7,8} and {9,1,2}. So, the first state consists of the districts {3,4,5}, and the representatives of these correspond to {1,0,1}. The majority is One, and hence the first state will have a One Governor. The representatives corresponding to the second state are {0,0,1}, and since the majority is Zero, this will have a Zero Governor. The third state has representatives {0,1,1}, and as Ones are in majority, this will have a One Governor. On the whole, there are two One Governors, and one Zero Governor, and hence the President will be a One. And since there is a way to partition the districts into states, in which the President is a One, the answer is 1.
</p>

<p>
In the fourth testcase, you can check that no matter how you construct the states, the President cannot be a One. Hence, the answer is 0.
</p>

