---
{"category_name":"easy","problem_code":"TOURMAP","problem_name":"Sridhar Likes Travelling","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"3-10-2012","tags":{"0":"graph","1":"hash","2":"kaushik_iska","3":"nov12","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/TOURMAP","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
Sridhar was a seasoned traveler. He liked to visit new places. More than all he was a meticulous planner. This time he was planning to visit Europe. He wrote down his travel itinerary like as follows:<br />
<br />
If he wanted to visit Madrid, Paris, Munich, Warsaw and Kiev in this order, he would write it down like as:
</p>
<pre>
Madrid Paris 100$
Paris Munich 200$
Munich Warsaw 150$
Warsaw Kiev 120$
</pre><p style="text-align:justify">
More formally, if he wanted to go from <b>A</b> to <b>B</b> directly and the price is <b>C</b> dollars, then he would write
</p>
<pre>A B C$

</pre><p>
on a card.<br />
Each move was written on a different card. Sridhar was a great planner, so he would never visit the same place twice. Just before starting his journey, the cards got shuffled. Help Sridhar figure out the actual order of the cards and the total cost of his journey.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each case contains an integer <b>N</b>, the number of cities Sridhar is planning to visit. <b>N-1</b> lines follow. Each line is of the form
</p>
<pre>
A<sub>i</sub> B<sub>i</sub> C<sub>i</sub>$

</pre><p>
where the <b>i-th</b> line refers to the <b>i-th</b> card after getting shuffled.</p>
<p><h3>Output</h3>
</p><p style="text-align:justify">
For each case the output contains <b>N</b> lines, the first <b>N-1</b> lines should contain the <b>N-1</b> cards in their proper original order, the <b>N-th</b> line should contain the total cost of the travel.<br />
See Example for detailed format.</p>
<p><h3>Constraints</h3>
</p><p style="text-align:justify">
1 ≤ <b>T</b> ≤ 10 <br />
1 ≤ <b>N</b> ≤ 5000 <br />
1 ≤ <b>length of A<sub>i</sub></b> ≤ 50 <br />
1 ≤ <b>length of B<sub>i</sub></b> ≤ 50 <br />
1 ≤ <b>C<sub>i</sub></b> ≤ 1000 <br />
<b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> will contain only <b>lowercase and uppercase latin characters, no two cities will have same names</b>.<br />
The names of cities are case-sensitive. So "warsaw" and "Warsaw" should be considered as different cities.
</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1
5
Warsaw Kiev 120$
Madrid Paris 100$
Munich Warsaw 150$
Paris Munich 200$

<b>Output</b>
Madrid Paris 100$
Paris Munich 200$
Munich Warsaw 150$
Warsaw Kiev 120$
570$
</pre>