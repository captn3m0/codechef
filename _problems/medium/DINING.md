---
{"category_name":"medium","problem_code":"DINING","problem_name":"Dining","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"13-05-2015","tags":{"0":"graphs","1":"min","2":"snck151a","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DINING","time":{"view_start_date":1432379700,"submit_start_date":1432379700,"visible_start_date":1432379700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/mandarin/DINING.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/russian/DINING.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/vietnamese/DINING.pdf">Vietnamese</a></h3>


<p>Sergey is visiting ChefTown - a town famous for its' restaurants with famous ChefLand's cuisine. Among the most recommended things to do in ChefTown is to taste ChefLand's all <b>N</b> national dishes. Sergey has decided to do it, but as the person who is fond of planning everything, he needs to plan his restaurants' visit's in advance.</p>

<p>He knows that he will stay in ChefTown for <b>D</b> days and each day he'll have a dinner in one of ChefTown's restaurants. It is always hard to say, whether a particular dish will appear in the restaurant on some particular day. But based on the internet reviews, he concluded that the probability that the <b>i</b>-th dish will appear in the restaurant he's going to visit on the <b>j</b>-th day is <b>A<sub>i, j</sub></b>.</p>

<p>On the other hand, everything is even more complicated. Sergey is a thin guy and thus unable to eat more than <b>K</b> dishes in a single day. That doesn't mean that he has to eat <b>K</b> dishes every day, but if he won't eat any dish at all during some day, he'll go to sleep hungry and displeased, so he wants to avoid such situations. Because of hard financial situation, he will have food only in restaurants and wants to taste all the dishes <b>exactly once</b>.</p>

<p>Now, in order to process all this information, Sergey asks you to help him. Please make a plan for him such that:
<ul>
<li>In the plan, he will taste every dish exactly once.</li>
<li>During any day, he will eat at least one dish, but no more than <b>K</b> dishes in total. Here we mean, that he will <i>plan</i> to eat no more than <b>K</b> dishes (and at least one dish), but note that he might fail in this because of unavailability of some dishes on a particular day.</li>
<li>The total probability that all the dishes will be available on their planned days of eating is maximal.</li>
</ul>
</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains single space-separated integers <b>N</b>, <b>D</b> and <b>K</b> denoting the number of dishes that Sergey wants to taste, the number of days he'll stay in ChefTown and the maximum number of dishes he can eat during a single day respectively. 
</p>
<p>
The following <b>N</b> lines will contain <b>D</b> space-separated real numbers each, where the <b>j</b>-th real number in the <b>i</b>-th line denotes the probability that the dish numbered <b>i</b>-th will be available in the restaurant that he will visit during the <b>j</b>-th day.</p>

<h3>Output</h3>
<p>
For each test case, output two lines.
<ul>
<li>The first line should contain maximal possible probability of eating all the dishes. Your answer will be considered as correct if it has an absolute error less than <b>1e−6</b> (ie. <b>10<sup>-6</sup></b>).</li>
<li> The second line should contain <b>N</b> space-separated integers, describing the plan. The <b>i</b>-th integer should describe the 1-indexed number of day, during which the <b>i</b>-th dish will be eaten. If there are more than one such possible plans, you can print any one of them.</li>
</ul>
</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>D, K</b> ≤ <b>N</b></li>
<li><b>D*K</b> ≥ <b>N</b></li>
<li><b>0.750</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>1.000</b></li>
<li>The probabilities will be given with no more than <b>3</b> digits after the decimal point.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 3 1
1.0 1.0 0.8
0.8 1.0 1.0
0.8 0.8 0.8

<b>Output:</b>
0.8
1 2 3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b>On the first day, Sergey will eat the first dish. On the second day, he'll eat the second dish. On the third day, he'll try eat the third dish that will appear with the probability of <b>0.8</b>. The total probability of dishes being available on these days is </b>0.8</b>. It is impossible to achieve the better result.</p>