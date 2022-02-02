---
{"category_name":"hard","problem_code":"DIFTRIP","problem_name":"Different Trips","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"laycurse","date_added":"25-09-2012","tags":{"0":"dec12","1":"hard","2":"suffix","3":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/DIFTRIP","time":{"view_start_date":1355220982,"submit_start_date":1355220982,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Chef is enjoying a wonderful vacation in Byteland. What makes the Chef impressed the most is the road system of the country. Byteland has <b>N</b> cities numbered 1 through <b>N</b>. City 1 is the capital of Byteland. The country also has <b>N</b>-1 bidirectional roads connecting the cities. The <b>i</b>-th road connects two different cities <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>. In this road system, people can travel between every pair of different cities by going through exactly one path of roads.
</p>
<p>
The roads are arranged in such a way that people can distinguish two cities only when both cities have different number of roads connected to it. Such two cities will be considered <i>similar</i>. For example, city <b>A</b> is similar to the capital if the number of roads connected to city <b>A</b> is equal to the number of roads connected to the capital.
</p>
<p>
On each day during the vacation, the Chef wants to have a trip as follows. He chooses two cities <b>A</b> and <b>B</b> such that the Chef will visit city <b>B</b> if he goes from <b>A</b> to the capital using the shortest path. Then, the Chef will visit the cities on the shortest path from <b>A</b> to <b>B</b> through this path. Please note that <b>A</b> may be equal to <b>B</b>; that means the Chef will enjoy the day in a single city.
</p>
<p>
The Chef does not want to have <i>similar</i> trips. Two trips are considered <i>similar</i> if and only if<br />
they both have the same number of visited cities and for each <b>i</b>, the <b>i</b>-th city visited in one trip is <i>similar</i> to the <b>i</b>-th city visited in the other trip.
</p>
<p>
The Chef wants to have as many different, namely not <i>similar</i>, trips as possible. Help him count the maximum number of possible trips such that no two of them are similar.</p>
<p><h3>Input</h3>
</p><p>
The first line of the input contains a single integer <b>N</b>. The <b>i</b>-th line of next <b>N</b>-1 lines contains two space-separated integers <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, denoting the <b>i</b>-th road.
</p>
<h3>Output</h3>
<p>
Output a single line containing the maximum number of different trips.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)<br /><b>u<sub>i</sub></b> ≠ <b>v<sub>i</sub></b><br /><br />
Every pair of different cities can be traveled by going through exactly one path of roads.</p>
<h3>Sample</h3>
<pre>
<b>Input</b>:
3
2 1
3 1

<b>Output</b>:
3
</pre><h3>Explanation</h3>
<p>
In the sample, the country consists of three cities.<br />
There are two roads. The first road connects city 1 and city 2.<br />
The second road connects city 1 and city 3.<br />
Each day, the Chef can choose the following possible trips:
</p>
<ul>
<li>
<b>A</b> = 1, <b>B</b> = 1
</li>
<li>
<b>A</b> = 2, <b>B</b> = 2
</li>
<li>
<b>A</b> = 3, <b>B</b> = 3
</li>
<li>
<b>A</b> = 2, <b>B</b> = 1
</li>
<li>
<b>A</b> = 3, <b>B</b> = 1
</li>
</ul>
<p>
However, since the trip (<b>A</b> = 2, <b>B</b> = 2) is similar to the trip (<b>A</b> = 3, <b>B</b> = 3),<br />
and the trip (<b>A</b> = 2, <b>B</b> = 1) is similar to the trip (<b>A</b> = 3, <b>B</b> = 1),<br />
there are only three possible different trips for the Chef.
</p>
