---
{"category_name":"easy","problem_code":"CHEFTOWN","problem_name":"ChefTown Parade","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"laycurse","date_added":"3-08-2012","tags":{"0":"Rubanenko","1":"data","2":"deque","3":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTOWN","time":{"view_start_date":1347356012,"submit_start_date":1347356012,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
ChefTown is the biggest city and the capital of ChefLand. There are N beautiful buildings: restaurants, museums, living houses with large kitchens and so on. Every building has its height. For every i (1<=i<=N) there is exactly one building with height i. The buildings are located in a single line from left to right. The height of ith building is H(i). The Mayor of ChefTown wants to organize a parade, where all great chefs will take part. A parade depends of its location. The location of a parade is a segment of consecutive buildings beginning near the building number L and ending near the building number R (1<=L<=R<=N). Any parade won't be interesting if it is not hold on an interesting segment of buildings. The segment of buildings is interesting if following are hold:

<ul>
<li>Imagine, that we have a segment [L,R].</li>
<li>Let K=R-L+1 be the length of this segment, and B be a list of heights of the buildings that belong to this segment.</li>
<li>Let's sort B in non-decreasing order.</li>
<li>Segment [L,R] is interesting if B[i]-B[i-1]=1 for every i (2<=i<=K).</li>
</ul>
<p></p>
<p>
Now the Mayor of ChefTown is interested how many ways to organize an interesting parade of length W for ChefTown citizens. Help him and find out the number of different parades of length W, which can be hold in the city. Two parades ([L1,R1] and [L2,R2]) are considered to be different, if L1&ne;L2 or R1&ne;R2.

<h3>Input</h3>
<p> Each input file consists of two lines, the first one contains two integers N and W (1<=N<=400000, 1<=W<=N). The second line contains N numbers H(i) (1<=i<=N) - the heights of the buildings. 

<h3>Output</h3>
<p>For each test case output a single integer - the number of interesting segments of buildings of length W.

<h3>Example</h3>

<pre>
<b>Input 1:</b>
2 1
2 1
<b>Input 2:</b>
4 2
1 2 3 4

<b>Output for Input 1:</b>
2
<b>Output for Input 2:</b>
3
</pre>