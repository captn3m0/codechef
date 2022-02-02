---
{"category_name":"hard","problem_code":"PARADE","problem_name":"Annual Parade","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":"laycurse","date_added":"3-08-2012","tags":{"0":"binary","1":"cgy4ever","2":"floyd","3":"min","4":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/PARADE","time":{"view_start_date":1347355978,"submit_start_date":1347355978,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
In the magic land, there is an annual parade hold on each spring.
<br>
<br>
There are <b>N</b> cities in magic land, and <b>M</b> directed roads between cities.
<br>
On the parade, there will be some(may be 0) heroes travel in this land, for each hero:
He start at city begin[i], traveling to some cities, and finish at city end[i]. Note that: begin[i] may be equals to end[i], but he must at least moved to another city during this travel. He can go on one road many times, but it will have a cost for each time.
<br>
<br>
The cost of this parade is the sum of these items:
<br>
1. The sum of costs by traveling on roads. (If a road is passed by k heroes, then it must be count k times.)
<br>
2. If for a hero, he ended at a city that not equals to his start city, i.e. begin[i] != end[i], then it will cost <b>C</b> dollars to move him back to his home.
<br>
3. If for a city, there is no heroes visited, then we must pay for the citizen <b>C</b> dollars as compensate.
<br>
<br>
The value of <b>C</b> may change every year, and we can predict this value in the following <b>K</b> years. 
Your task is: calculate the minimal cost of each year.
<br>
<h3>Input</h3>
<p>
In the first line, there are 3 integers: <b>N</b>, <b>M</b> and <b>K</b>.
<br>
In the following <b>M</b> lines:
<br>
there will be 3 integers: <b>S[i]</b>, <b>T[i]</b>, and <b>V[i]</b>, describing a directed road from <b>S[i]</b> to <b>T[i]</b>, cost <b>V[i]</b> dollars.
<br>
In the next <b>K</b> lines:
There will be an integer: <b>C[i]</b>, describing the value of <b>C</b> in that year.
<br>
<h3>Output</h3>
<p>
Output <b>K</b> lines:
each line contain an integer, corresponding to the minimal cost of each year.
<h3>Constraints</h3>
2 <= <b>N</b> <= 250
<br>
1 <= <b>M</b> <= 30000
<br>
1 <= <b>K</b> <= 10000
<br>
<b>S</b>[i] != <b>T</b>[i], 1 <= <b>S</b>[i], <b>T</b>[i] <= <b>N</b>
<br>
1 <= <b>V</b>[i] <= 10000
<br>
1 <= <b>C</b> <= 10000
<br>
Note that: there may be more than 1 road between a certain pair of cities.

<h3>Example</h3>
<pre>
<b>Input:</b>
6 5 3
1 3 2
2 3 2
3 4 2
4 5 2
4 6 2
1
5
10

<b>Output:</b>
6
21
32
</pre>
<br>
<b>Explanation</b>
<br>
In the first year, since <b>C</b> is very small, an optimal solution is: no hero travel, we pay 1 dollar for each city as compensate.
<br>
In the second year, an optimal solution is: One hero traveling in the path: 1->3->4->5. We pay 2+2+2=6 dollars for the roads, 5 dollars for taking him back to city 1, and pay 5 dollars for city 2 and 6 as compensate.
<br>
In the third year, one optimal solution is: One hero traveling in the path: 1->3->4->5, and another hero traveling in the path: 2->3->4->6.
