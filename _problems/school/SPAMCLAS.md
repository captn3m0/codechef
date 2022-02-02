---
{"category_name":"school","problem_code":"SPAMCLAS","problem_name":"Spam Classification Using Neural Net","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"12-12-2017","tags":{"0":"acm17kgp","1":"admin2","2":"easy","3":"kgp17rol"},"editorial_url":"https://discuss.codechef.com/problems/SPAMCLAS","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Neural nets are extremely popular in the Machine Learning domain. A neural net is composed of multiple layers. It has an input layer in which you input the parameter <b>x</b> (the input of the program). The input is then passed through multiple hidden layers, finally getting one output at the final layer, called the output layer.</p>

<p>We have a very simple neural net, which consist of <b>N</b> hidden layers. Each layer contains one neuron. Each neuron has two values associated with it: <b>w<sub>i</sub></b>, and <b>b<sub>i</sub></b>, denoting the weight and the bias of the neuron. If you give the neuron an input of x, it produces an output of (<b>w<sub>i</sub> * x) + b<sub>i</sub></b>. </p>

<p>Thus, an input <b>x</b> gets transformed by the neural net as follows. The first hidden neuron takes the input <b>x</b> and produces <b>y = w<sub>1</sub> * x + b<sub>1</sub></b>, which acts as the input for the second neuron. Then, the second neuron takes input <b>y</b> and produces an output of <b>z = w<sub>2</sub> * y + b<sub>2</sub></b>. This keeps happening and you get a single output at the end from the <b>N</b>-th neuron.</p>

<p>There are some users and we want to find if they are spamming or not. They have integer user-ids, which range from <b>minX</b> to <b>maxX</b> (both inclusive). So we take each of these user-ids and feed it as input to the first layer of the neural net. If the final output is even, then that user is not a spammer, otherwise, the user is a spammer. You have to count the number of non-spammers and spammers.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space-separated integers <b>N, minX, maxX</b>.</li>
<li>Each of the next <b>N</b> lines contains two space-separated integers <b>w<sub>i</sub></b> and <b>b<sub>i</sub></b> denoting the weight and the bias of the i-th neuron.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output two space-separated integers denoting the number of non-spammers and the number of spammers, respectively.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>minX ≤ maxX</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>w<sub>i</sub></b>, <b>b<sub>i</sub></b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
1 1 2
1 2
2 1 4
2 4
2 3
3 2 1000000000
2 4
2 2
5 4

<b>Output</b>
1 1
0 4
999999999 0
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. There is a single neuron with weight = 1 and bias = 2. Let us check the output for x = 1: w * x + b = 1 * 1 + 2 = 3. Output for x = 2 would be 2 * 1 + 2 = 4. You can see that one of these is even and the other is odd. So, there is one spammer and one non-spammer.</p>

<p><b>Example 2</b>. There are two neurons with weights 2 each, but bias 4, 3 respectively.</p>
<ul>
<li> x = 1, y = 2 * 1 + 4 = 6. z = 2 * 6 + 3 = 15</li>
<li> x = 2, y = 2 * 2 + 4 = 8. z = 2 * 8 + 3 = 19</li>
<li> x = 3, y = 2 * 3 + 4 = 10. z = 2 * 10 + 3 = 23</li>
<li> x = 4, y = 2 * 4 + 4 = 12. z = 2 * 12 + 3 = 27</li>
</ul>
</p>

<p>You can see that all of these are odd and hence signify that they are spammers. So, there are 0 non-spammers and 4 spammers.</p>