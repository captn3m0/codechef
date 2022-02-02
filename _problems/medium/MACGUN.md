---
{"category_name":"medium","problem_code":"MACGUN","problem_name":"Machine Gun","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":15,"source_sizelimit":50000,"problem_author":"anhdq","problem_tester":"laycurse","date_added":"16-07-2012","tags":{"0":"anhdq","1":"aug12","2":"graph","3":"matching","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/MACGUN","time":{"view_start_date":1344677892,"submit_start_date":1344677892,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Country X has a military zone framed as a grid of size MxN.
Each point of the grid could be free, occupied by a machine gun or by a protector.
</p>

<p>
A machine gun at point (x, y) could automatically attack other guns at points (x-2, y-2), (x-2, y+2), (x+2, y-2) and (x+2, y+2).
So we could not put two guns at points which make them destroy each others,
unless there is a protector exactly in the middle.
Eg.: We could put two guns at point (x, y) and (x+2, y+2) if and only if there is a protector at point (x+1, y+1).</p>

<p>
Given a map with some points which has been occupied by guns or protectors,
your task is to find out the greatest number of guns to add to this map satisfying rules above.
Note that we can put a machine gun at a free point, but we cannot remove any machine gun and protector, and we cannot add protectors.
</p>

<h3>Input</h3>
<p>There are several test cases, each formed as follows:</p>
<ul>
<li>The first line contains two positive integer M, N.</li>
<li>Next M lines, each contains N characters (no spaces) of {'F', 'G', 'P'} (ASCII: #70, #71, #80), the j-th character of the i-th line represents the point (i-1, j-1) on the map: 'F' is a free point, 'G' is occupied by a machine gun and 'P' is occupied by a protector.</li>
</ul>
<p>The input is ended with M = N = 0.</p>

<h3>Output</h3>
<p>For each test case, output on a line the greatest number of guns which can be added the given map.</p>

<h3>Constraints</h3>
<p>
1 ≤ M, N ≤ 700<br />
In the given map, any two machine guns do not attack each other.<br />
The sum of MxN does not exceed 490000 in one judge file.<br />
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
3 4
FPFP
PFPP
GFGF
5 3
FPF
FFF
FGG
PFP
FPF
0 0

<b>Output:</b>
3
6

</pre>