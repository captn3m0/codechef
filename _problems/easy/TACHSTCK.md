---
{"category_name":"easy","problem_code":"TACHSTCK","problem_name":"Chopsticks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"keshav_57","date_added":"15-05-2013","tags":{"0":"cakewalk","1":"cook36","2":"greedy","3":"sorting","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TACHSTCK","time":{"view_start_date":1374431400,"submit_start_date":1374431400,"visible_start_date":1374431400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><i>
<p>[<b>Chopsticks</b> (singular: <b>chopstick</b>) are short, frequently tapered sticks used in pairs of equal length, which are used as the traditional eating utensils of China, Japan, Korea and Vietnam. Originated in ancient China, they can also be found in some areas of Tibet and Nepal that are close to Han Chinese populations, as well as areas of Thailand, Laos and Burma which have significant Chinese populations. Chopsticks are most commonly made of wood, bamboo or plastic, but in China, most are made out of bamboo. Chopsticks are held in the dominant hand, between the thumb and fingers, and used to pick up pieces of food.]</p>
<p></p></i></p>
<p align="right"> Retrieved from <a href="http://en.wikipedia.org/wiki/Chopsticks">wikipedia</a></p>
<p>Actually, the two sticks in a pair of chopsticks need not be of the same length. A pair of sticks can be used to eat as long as the difference in their length is at most <b>D</b>. The Chef has <b>N</b> sticks in which the i<sup>th</sup> stick is <b>L[i]</b> units long. A stick can't be part of more than one pair of chopsticks. Help the Chef in pairing up the sticks to form the maximum number of usable pairs of chopsticks.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>D</b>. The next <b>N</b> lines contain one integer each, the i<sup>th</sup> line giving the value of <b>L[i]</b>.</p>
<h3>Output</h3>
<p>Output a single line containing the maximum number of pairs of chopsticks the Chef can form.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000 (10<sup> 5 </sup>) </b></li>
<li><b>0</b> ≤ <b>D</b> ≤ <b>1,000,000,000 (10<sup> 9 </sup>) </b></li>
<li><b>1</b> ≤ <b>L[i]</b> ≤ <b>1,000,000,000 (10<sup> 9 </sup>)</b> for all integers <b>i</b> from <b>1</b> to <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

5 2
1
3
3
9
4

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>
The 5 sticks have lengths 1, 3, 3, 9 and 4 respectively. The maximum allowed difference in the lengths of two sticks forming a pair is at most 2.<br />
It is clear that the 4th stick (length 9) cannot be used with any other stick.<br />
The remaining 4 sticks can can be paired as (1st and 3rd) and (2nd and 5th) to form 2 pairs of usable chopsticks.
</p>
