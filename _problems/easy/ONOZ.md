---
{"category_name":"easy","problem_code":"ONOZ","problem_name":"Digital clock","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"antoniuk1","date_added":"27-01-2016","tags":{"0":"cakewalk","1":"cook68","2":"string","3":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/ONOZ","time":{"view_start_date":1458498600,"submit_start_date":1458498600,"visible_start_date":1458498600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/mandarin/ONOZ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/russian/ONOZ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK68/vietnamese/ONOZ.pdf">Vietnamese</a> as well.</h3>
<p><i>3:33</i></p>
<p>It's possible for all the digits displayed on a digital clock in the <i>hours:minutes</i> format to be identical. The time shown above (<i>3:33</i>) is an example of such a situation. Other examples are <i>2:2</i> and <i>1:11</i>. Note that the digits of <i>33:33</i> are identical, but it is not a valid time on a usual digital clock.</p>
<p>The above example was for a usual 24-hour format digital clock. Let's consider a more general clock, where an hour lasts <b>M</b> minutes and a day lasts <b>H</b> hours (therefore, the clock can show any number of hours between <b>0</b> and <b>H-1</b>, inclusive, and any number of minutes between <b>0</b> and <b>M-1</b>, inclusive). Both the hours and the minutes are shown <b>without leading zeroes</b> in decimal notation and their separator (e.g., ':') doesn't matter.</p>
<p>Can you tell how many minutes during a day will the digital clock have identical digits displayed on it?</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> - the number of test cases.</li>
<li>Each of the next <b>T</b> lines contains two space-separated integers <b>H</b> and <b>M</b> for one test case.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line corresponding to the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 50</b></li>
<li><b>1 ≤ H, M ≤ 100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6
24 60
34 50
10 11
10 12
11 11
1 1

<b>Output:</b>
19
20
10
11
10
1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> A clock shows two identical digits at times <i>0:0</i>, <i>1:1</i>, .., <i>9:9</i>, three identical digits at times <i>11:1</i>, <i>22:2</i>, <i>1:11</i>, <i>2:22</i>, <i>3:33</i>, <i>4:44</i>, <i>5:55</i>, and four identical digits at times <i>11:11</i> and <i>22:22</i>. So, there are 19 minutes during which the time displayed by the clock will have identical digits. </p>
<p><b>Example case 2.</b> Compared to the previous case, the clock doesn't show <i>5:55</i>, but can show <i>33:3</i> and <i>33:33</i>.</p>
<p><b>Example case 6.</b> In this example, our day consists of one hour and one hour consists of one minute. Hence, the entire day is just 1 minute - the only time the digital clock will display is 0:0 during the entire day, (i.e. the entire hour, i.e. entire minute). And 0:0 has all digits identical, so the answer is 1.</p>
