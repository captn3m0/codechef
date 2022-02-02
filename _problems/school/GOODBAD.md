---
{"category_name":"school","problem_code":"GOODBAD","problem_name":"Good and Bad Persons","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"7-12-2017","tags":{"0":"acm17chn","1":"admin2","2":"cakewalk","3":"chn17rol"},"editorial_url":"https://discuss.codechef.com/problems/GOODBAD","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is a really nice and respectful person, in sharp contrast to his little brother, who is a very nasty and disrespectful person. Chef always sends messages to his friends in all small letters, whereas the little brother sends messages in all capital letters.</p>

<p>You just received a message given by a string <b>s</b>. You don't know whether this message is sent by Chef or his brother. Also, the communication channel through which you received the message is erroneous and hence can flip a letter from uppercase to lowercase or vice versa. However, you know that this channel can make at most <b>K</b> such flips.</p>

<p>Determine whether the message could have been sent only by Chef, only by the little brother, by both or by none.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b> denoting the length of the string <b>s</b> and the maximum number of flips that the erroneous channel can make.</li>
<li>The second line contains a single string <b>s</b> denoting the message you received.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, output a single line containing one string — "chef", "brother", "both" or "none".</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>0 ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>s</b> consists only of (lowercase and uppercase) English letters</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>

4
5 1
frauD
5 1
FRAUD
4 4
Life
10 4
sTRAWBerry

<b>Output</b>

chef
brother
both
none
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Only one flip is possible. So it is possible that Chef sent "fraud" and the channel flipped the last character to get "frauD". However, it is not possible for the brother to have sent "FRAUD", because then it would need 4 flips. Hence the answer is "chef".</p>

<p><b>Example case 2:</b> Only one flip is possible. So it is possible that the brother sent "FRAUD" and the channel didn't flip anything. However, it is not possible for Chef to have sent "fraud", because then it would need 5 flips. Hence the answer is "brother".</p>


<p><b>Example case 3:</b> Four flips are allowed. It is possible that Chef sent "life" and the channel flipped the first character to get "Life". It is also possible that the brother sent "LIFE" and the channel flipped the last three characters to get "Life". Hence the answer is "both".</p>

<p><b>Example case 4:</b> Four flips are allowed. It is not possible that Chef sent "strawberry", because it would need five flips to get "sTRAWBerry". It is also not possible that the brother sent "STRAWBERRY", because that would also need five flips. Hence the answer is "none".</p>