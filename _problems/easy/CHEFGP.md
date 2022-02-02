---
{"category_name":"easy","problem_code":"CHEFGP","problem_name":"Chef and a great voluntary Program","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"COB","10":"CPP 4.3.2","11":"CPP 6.3","12":"CPP14","13":"CS2","14":"D","15":"ERL","16":"FORT","17":"FS","18":"GO","19":"HASK","20":"ICK","21":"ICON","22":"JAVA","23":"JS","24":"kotlin","25":"LISP clisp","26":"LISP sbcl","27":"LUA","28":"NEM","29":"NICE","30":"NODEJS","31":"PAS fpc","32":"PAS gpc","33":"PERL","34":"PERL6","35":"PHP","36":"PIKE","37":"PRLG","38":"PYPY","39":"PYTH","40":"PYTH 3.5","41":"RUBY","42":"rust","43":"SCALA","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"alex_2oo8","date_added":"6-10-2014","tags":{"0":"berezin","1":"easy","2":"greedy","3":"oct17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFGP","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/CHEFGP.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/CHEFGP.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFGP.pdf">vietnamese</a> as well.</h3>

<p>Chef likes to eat apples and bananas a lot. Today, he is doing a voluntary service by providing these fruits to needy people in a lunger (a gathering of needy people). The people form a queue to collect fruits from Chef. Chef distributes each person one of the fruits either an apple or a banana.</p>

<p>You are given information about the way Chef distributed fruits to the people by a string <b>s</b>, whose each character is either 'a' or 'b' denoting whether the corresponding person was distributed an apple or a banana.</p>

<p>After the event Chef wants to analyze what he could have done to make the event memorable. The event will be memorable if everyone at the end is happy. Whenever a person in the queue get an apple or a banana then he will observe the most recent <b>K</b> fruits distributed (including fruits he previously took, but not counting the fruit he just got) and if all of them were same as the fruit he just got, then he becomes disgruntled.</p>

<p>The value of <b>K</b> if the person is getting an apple is <b>x</b>, and similarly <b>y</b> for banana.</p>

<p>To make all the people happy, Chef can change the order of distributing the fruits (apple and bananas) and also can give some people extra kiwi fruits. Since the kiwis are costly, Chef would want to minimize the number of kiwis he needed to distribute. Note that a person leaves the queue as soon as Chef distributes him either an apple or a banana.
 So Chef should provide a person some kiwis before providing an apple or a banana, otherwise Chef won't be able to provide him kiwi as they would have already left the queue.</p>
<p>



<p>Help Chef in finding a way of distributing the fruits to the people that make everyone happy and requires Chef to buy as few kiwis as possible.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains the string <b>s</b>.</p>
<p>The second line contains two space separated integers <b>x, y</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single string corresponding to the way in which the fruits should be distributed to the people. Apple fruit is denoted by 'a', banana by 'b', and kiwi by '*'. If there are more than one possible solutions,
 you can print any. Note that the number of apples in the output should be equal to the number of apples in the initial distributions of fruits denoted by string <b>s</b>. Same goes for bananas.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 50</b></li>
<li><b>1 ≤ |s| ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ x, y ≤ |s|</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (20 points)</b>: <b>x = y = 1</b></li>
<li><b>Subtask #2 (30 points)</b>: <b>1 ≤ |s| ≤ 10<sup>3</sup></b></li>
<li><b>Subtask #3 (50 points)</b>: Original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
6
ab
1 1
aab
1 1
aabb
1 2
aaaaab
2 1
aaaa
1 3
aaaaa
2 2
<b>Output</b>
ab
aba
abba
aa*abaa
a*a*a*a
aa*aa*a
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The way of distributing fruits already makes everyone happy.</p>
<p><b>Example 2</b>. The second person will be disgruntled as he receives apple same as the person ahead of him. One possible way of having good impression is to distribute in the order aba.</p>
<p><b>Example 4</b>. It's impossible for the Chef to make everyone happy without buying extra kiwi fruits. Chef will buy one extra kiwi fruit. Now, he distributes aa*abaa, i.e. apple to first and second, kiwi and apple to third, banana to fourth, and apples to fifth and sixth persons. This makes everyone happy. Notice that third person is happy because when he got an apple he checked the last 2 fruits taken which are the apple that the second person and the kiwi that he previously took, and they are not all apples so he is happy.</p>
<p><b>Example 6</b>. at least two kiwis are needed here, if we gave the first one to third person and second one to fifth person then no one will be disgruntled, for example when the third person get an apple he will check the last two fruits distributed, they are one kiwi given to the same person previously and one apple given the second person so not all of them are apples, so it's fine with him.</p>
