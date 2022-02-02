---
{"category_name":"challenge","problem_code":"CLOSEST","problem_name":"Closest Points","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.499541,"source_sizelimit":50000,"problem_author":"gamabunta","problem_tester":"anton_lunyov","date_added":"24-04-2011","tags":{"0":"challenge","1":"gamabunta","2":"geometry","3":"june12","4":"kd"},"editorial_url":"http://discuss.codechef.com/problems/CLOSEST","time":{"view_start_date":1339403800,"submit_start_date":1339403800,"visible_start_date":1339407000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Crisis at Byte Town!
</p>

<p>
There have been 100000 (of course, in base 2) instances of bank robberies in the past month! That is, more than one robbery in a day in average and the Byte Town Police Department (BTPD) is dumb founded. Chef, the honorable President of Byte Town, has pledged to solve the problem for good.
</p>

<p>
Chef investigated and found out that Byte Town has a large number of BTPD response centers and an equally large (if not larger) number of banks. Each bank has an alert mechanism that alerts a BTPD response center assigned to the bank. That response center is then responsible for sending in a strike team. The response center assigned to some bank is called the respondent for this bank. Unfortunately, that is the problem. The current assignment of which BTPD response center responds to an alert by a bank is outdated. Chef has decided to upgrade this system, in lieu of which, you have to solve this problem.
</p>

<p>
Byte Town, being the quintessential challenge for every programmer, is Euclidean 3D space. Each response center and each bank is represented by some point in this 3D space. There are <b>N</b> response centers and <b>Q</b> banks in Byte Town. BTPD response centers are labeled by integers <b>0, 1, ..., N-1</b> and <b>i</b><sup>th</sup> response center is represented by the point with coordinates <b>(X<sub>i</sub>, Y<sub>i</sub>, Z<sub>i</sub>)</b>. Banks are labeled by integers <b>0, 1, ..., Q-1</b> and <b>j</b><sup>th</sup> bank is represented by the point with coordinates <b>(A<sub>j</sub>, B<sub>j</sub>, C<sub>j</sub>)</b>. <b>No two buildings (banks, as well as response centers) will ever be at the same point.</b> Your task is to assign for each bank the BTPD response center that will be the respondent for this bank. <b>A response center can be the respondent for more than one bank. But every bank should have exactly one respondent.</b>
</p>

<p>
Bluntly speaking, your goal is to minimize the Euclidian distance between bank and its respondent. The Euclidian distance between <b>i</b><sup>th</sup> response center and <b>j</b><sup>th</sup> bank is equal to the square root of the number
<b>(X<sub>i</sub> – A<sub>j</sub>)<sup>2</sup> + (Y<sub>i</sub> – B<sub>j</sub>)<sup>2</sup> + (Z<sub>i</sub> – C<sub>j</sub>)<sup>2</sup></b>.
</p>

<p>
Denote by <b>C[j]</b> the closest response center to the <b>j</b><sup>th</sup> bank and by <b>D[j]</b> the distance to it. Your absolute goal is to find <b>C[j]</b> for all banks. <b>But since it is the challenge problem you can get accepted even if your assignment will be not optimal.</b> But to get accepted you need to find <b>C[j]</b> for at least one value of <b>j</b>. To make things clear we note that <b>C[j]</b> could be not unique, so by the phrase <b>"to find C[j]"</b> we mean to find any response center that has distance <b>D[j]</b> to the <b>j</b><sup>th</sup> bank.
</p>

<h3>Input</h3>

<p>
The first line of the input file contains an integer <b>N</b>, the number of BTPD response centers. Each of the following <b>N</b> lines contains three integers <b>X<sub>i</sub>, Y<sub>i</sub>, Z<sub>i</sub></b>, the coordinates of the <b>i</b><sup>th</sup> response center. The next line contains an integer <b>Q</b>, the number of banks. Each of the following <b>Q</b> lines contains three integers <b>A<sub>j</sub>, B<sub>j</sub>, C<sub>j</sub></b>, the coordinates of the <b>j</b><sup>th</sup> bank. Each pair of consecutive numbers in every line is separated by exactly one space.
</p>

<h3>Output</h3>

<p>
For each of the <b>Q</b> banks from the input file you should print exactly one line that contains the number from the set <b>{0, 1, ..., N-1}</b>, the response center that you have assigned to the corresponding bank. So the <b>(j+1)</b><sup>th</sup> line of the output file should contain the respondent of the <b>j</b><sup>th</sup> bank. Just to re-iterate, <b>your output will be considered as correct if and only if you print exactly <b>Q</b> integers <b>I<sub>0</sub>, I<sub>1</sub>, ..., I<sub>Q-1</sub></b>, each from <b>0</b> to <b>N-1</b> (inclusive) such that for at least one value of <b>j</b> from <b>0</b> to <b>Q-1</b> (inclusive) we have that the <b>I<sub>j</sub></b><sup>th</sup> response center is the closest response center to the <b>j</b><sup>th</sup> bank.</b>
</p>

<h3>Scoring</h3>

<p>
Your score for a test file is the total number of banks for which you find the closest possible response center. Formally the score is the number of those values of <b>j</b> from <b>0</b> to <b>Q-1</b> such that the distance between <b>j</b><sup>th</sup> bank and the response center that you have assigned to it is equal to <b>D[j]</b>. The total score for a submission is the average score across all the test files.
</p>

<h3>Constraints</h3>
<p><b>1</b> ≤ <b>N</b>, <b>Q</b> ≤ <b>50000</b></p>
<p>Each point in the input file has coordinates with absolute value no more than <b>10<sup>9</sup></b>.
<br />
That is, <b>|X<sub>i</sub>|, |Y<sub>i</sub>|, |Z<sub>i</sub>|, |A<sub>j</sub>|, |B<sub>j</sub>|, |C<sub>j</sub>|</b> ≤ <b>10<sup>9</sup></b></p>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 0 0
0 0 1
0 1 0
2
0 -1 0
0 0 -1

<b>Output:</b>
0
1
</pre>

<h3>Explanation</h3>
<p>
Consider the <b>0</b><sup>th</sup> bank. It has coordinates <b>(0, -1, 0)</b>. Hence the squares of distances from this bank to response centers are
</p>
<ul>
<li> to the <b>0</b><sup>th</sup> center: <b>(1 – 0)<sup>2</sup> + (0 – (-1))<sup>2</sup> + (0 – 0)<sup>2</sup> = 1 + 1 + 0 = 2</b>;
</li><li> to the <b>1</b><sup>st</sup> center: <b>(0 – 0)<sup>2</sup> + (0 – (-1))<sup>2</sup> + (1 – 0)<sup>2</sup> = 0 + 1 + 1 = 2</b>;
</li><li> to the <b>2</b><sup>nd</sup> center: <b>(0 – 0)<sup>2</sup> + (1 – (-1))<sup>2</sup> + (0 – 0)<sup>2</sup> = 0 + 2<sup>2</sup> + 0 = 4</b>.
</li></ul>
<p>
Thus, the closest response centers to the <b>0</b><sup>th</sup> bank are both <b>0</b><sup>th</sup> and <b>1</b><sup>st</sup> response centers. Since in the output we assign <b>0</b><sup>th</sup> response center to this bank we find one of the closest response centers to this bank and it will be counted in our resulting score.

</p><p>
Now consider the <b>1</b><sup>st</sup> bank. It has coordinates <b>(0, 0, -1)</b>. Hence the squares of distances from this bank to response centers are
</p>
<ul>
<li> to the <b>0</b><sup>th</sup> center: <b>(1 – 0)<sup>2</sup> + (0 – 0)<sup>2</sup> + (0 – (-1))<sup>2</sup> = 1 + 0 + 1 = 2</b>;
</li><li> to the <b>1</b><sup>st</sup> center: <b>(0 – 0)<sup>2</sup> + (0 – 0)<sup>2</sup> + (1 – (-1))<sup>2</sup> = 0 + 0 + 2<sup>2</sup> = 4</b>;
</li><li> to the <b>2</b><sup>nd</sup> center: <b>(0 – 0)<sup>2</sup> + (1 – 0)<sup>2</sup> + (0 – (-1))<sup>2</sup> = 0 + 1 + 1 = 2</b>.
</li></ul>
<p>
Thus, the closest response centers to the <b>1</b><sup>st</sup> bank are both <b>0</b><sup>th</sup> and <b>2</b><sup>nd</sup> response centers. Since in the output we assign <b>1</b><sup>st</sup> response center to this bank we fail to find the closest response center to this bank and it will not be counted in our resulting score.
</p>

<p>
Thus, total score for this test case would be <b>1</b>. Since we find the closest response center to at least one bank such output will be considered as correct.
</p>

<h3>Test Generation</h3>

<p>
In each official test file <b>N = Q = 50000</b>. Coordinates of banks and response centers are generated using different strategies. In some tests coordinates are uniformly distributed within its range while other tests created specifically to fail certain heuristics.
</p>