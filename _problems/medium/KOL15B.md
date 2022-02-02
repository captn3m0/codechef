---
{"category_name":"medium","problem_code":"KOL15B","problem_name":"Finding Hardest Sum Value","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"11-10-2015","tags":{"0":"acmkol15","1":"devuy11","2":"dynamic","3":"easy","4":"kadane","5":"maximum","6":"maximum","7":"maxsum"},"editorial_url":"http://discuss.codechef.com/problems/KOL15B","time":{"view_start_date":1446296400,"submit_start_date":1446296400,"visible_start_date":1446296400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Ramesh, Suresh, Mahesh, and Mukesh are moving to a new city and are looking for apartments to live.
</p>
<p>
Now this city is not like any other city. This city is a matrix of apartments and there are no roads. The only way to commute is to go through apartments.
</p>
<p>
If any of the friends go through an apartment even once, the group will have to pay its full rent. From an apartment, you can go to the apartments to its North, South, East, or West.
</p> 
<p>
Since Ramesh, Suresh, Mahesh, and Mukesh are best friends, they want to meet each other at least once a month. Also, all four are highly superstitious, so Ramesh only goes West, Suresh only goes North, Mahesh only goes East, and Mukesh only goes South.
</p>
<p>
Any number of people can live in any of the apartments. Cost of all the apartments in the city is given, some of which may be negative. Negative cost means if any of the friend lives in or goes through this apartment, the group will get paid an amount equal to the negation of the cost. Now the aim of the four friends is to find the minimum cost for which all of them can live in the city and meet each other at least once a month.</p>

<b>Note: </b>The four friends can meet in an apartment where none of them actually lives as well.<br><br>

<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases to follow.</p>
<p>First line of each test case contains two integers: <b>N</b> and <b>M</b>, where <b>N</b> denotes the number of rows in the matrix and <b>M</b> denotes number of columns in the matrix.</p>
<p>Next <b>N</b> lines describe the rows of the matrix follow, one row per line. Each row contains <b>M</b> space-separated integers denoting the cost of the apartment.</p>
<p> </p>
<h3>Output</h3>
<p>For each test cases, output the minimum cost as asked in the problem.</p>
<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>-10<sup>4</sup></b> ≤ <b>Cost of any apartment</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>Sum of N*M over all test cases</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 3
1 2 3
4 -10 5
6 7 8
3 3
1 -10 3
-13 -12 -11
7 8 9
3 3
1 -2 3
-4 5 -6
7 -8 9
4 4
1 2 3 4
5 6 -7 8
-9 -10 -11 -12
13 14 -15 16

<b>Output:</b>
-10
-46
-15
-64
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b>All 4 friends stay at the apartment which has rent -10.</p>
<p><b>Example case 2.</b>Mukesh lives in the apartment with rent -10, Mahesh lives in the apartment with rent -13, Suresh lives in the apartment with rent -12, and Ramesh lives in the apartment with rent -11</p>
<p><b>Example case 3.</b>Mukesh lives in the apartment with rent -2, Mahesh lives in the apartment with rent -4, Suresh lives in the apartment with rent -8, and Ramesh lives in apartment with rent -6. They all meet at the apartment with rent 5. So the total cost becomes (-2) + (-6) + (-4) + (-8) + (5) = -15</p>
<p><b>Example case 4.</b>Mukesh lives in the apartment with rent -7, Mahesh lives in the apartment with rent -9, Suresh lives in the apartment with rent -15, and Ramesh lives in the apartment with rent -12. They all meet at the apartment with rent -11. So the total cost becomes -7-9-10-11-12-15 = -64</p>