---
{"category_name":"medium","problem_code":"FAIRPAIR","problem_name":"Fair Pairing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"kevinsogo,xcwgf666","date_added":"31-05-2016","tags":{"0":"easy","1":"greedy","2":"kevinsogo","3":"snckpb16"},"editorial_url":"http://discuss.codechef.com/problems/FAIRPAIR","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/FAIRPAIR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/FAIRPAIR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/FAIRPAIR.pdf">Vietnamese</a> as well.</h3>
<p>It's final exam week of Chef's cooking class. His class of <b>N</b> students are busy studying for it. Unfortunately, being crammers, each student is only able to study one topic. The <b>i</b>-th student studied topic <b>S<sub>i</sub></b>. Topics are numbered <b>1</b> to <b>10<sup>6</sup></b>.</p>
<p>Chef prepared <b>N</b> tasks for exam. He intends to assign each task to exactly one student. Each task requires exactly one topic to pass. The <b>j</b>-th task requires topic <b>T<sub>j</sub></b>.</p>
<p>Chef is a sadistic teacher, he doesn't want the students to pass! Therefore he wants to assign the tasks in such that <i>the number of students assigned to the topic he/she studied for is minimized</i>. Can you please help Chef in finding any such assignment?</p>
<p>If there are multiple possible assignments, you may output any one.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b>. </p>
<p>The second line contains <b>N</b> space-separated integers <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, ..., <b>S<sub>N</sub></b>.</p>
<p>The third line contains <b>N</b> space-separated integers <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, ..., <b>T<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output two lines.</p>
<p>The first line should contain a single integer denoting the minimum number of students assigned to the topic he/she studied for, i.e. number of students who passed the exam. </p>
<p>The second line should describes assignment. It should contain <b>N</b> space separated integers - <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>, meaning the <b>i</b>-th student is assigned to the <b>a<sub>i</sub></b>-th task.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li>The sum of the <b>N</b>s  in a single test file is ≤ <b>3×10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>S<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>T<sub>j</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
4
100 200 300 400
200 200 300 400
3
100 100 200
100 100 200</tt>

<b>Output:</b>
<tt>0
2 3 4 1
1
2 3 1</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here, there exists an assignment where no student is assigned to the topic he/she studied for:</p>
<ul>
<li>Student <b>1</b> gets task <b>2</b>,</li>
<li>Student <b>2</b> gets task <b>3</b>,</li>
<li>Student <b>3</b> gets task <b>4</b>,</li>
<li>Student <b>4</b> gets task <b>1</b>.</li>
</ul>
<p><b>Example case 2.</b> In this test case, there's no way we can avoid at least one student from being assigned the topic he/she studied for. But the sample output shows that the minimum in this case is <b>1</b>:</p>
<ul>
<li>Student <b>1</b> gets task <b>2</b> (and thus gets the topic he/she studied for),</li>
<li>Student <b>2</b> gets task <b>3</b>,</li>
<li>Student <b>3</b> gets task <b>1</b>.</li>
</ul>
