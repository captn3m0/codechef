---
{"category_name":"easy","problem_code":"PUMPWAT","problem_name":"Pumping Water","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"17-10-2018","tags":{"0":"alei","1":"cook99","2":"easy","3":"observations","4":"preprocessing","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/PUMPWAT","time":{"view_start_date":1540146602,"submit_start_date":1540146602,"visible_start_date":1540146602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK99/hindi/PUMPWAT.pdf), [Spanish](http://www.codechef.com/download/translated/COOK99/spanish/PUMPWAT.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/COOK99/mandarin/PUMPWAT.pdf), [Russian](http://www.codechef.com/download/translated/COOK99/russian/PUMPWAT.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK99/vietnamese/PUMPWAT.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK99/bengali/PUMPWAT.pdf) as well.


In ChefLand, there is a mountain range consisting of $N$ hills (numbered $1$ through $N$) in a straight line. Let's denote the height of the $i$-th hill from the left by $h_i$.

Ada is working on the water supply system of ChefLand. On some of the hills, she wants to place water reservoirs; then, for each reservoir, she will decide in which direction the water should flow from it — either to the left or to the right (water may not flow in both directions from the same reservoir). From a reservoir on a hill with height $h$, water flows in the chosen direction until it reaches the first hill that is strictly higher than $h$; all hills before this hill (including the hill containing the reservoir) are therefore supplied with water.

For example, suppose we have hills with heights $[7, 2, 3, 5, 8]$. If we place a reservoir on the hill with height $5$, and pump water from it to the left, then the hills with heights $2$, $3$ and $5$ are supplied with water.

Help Ada find the minimum numer of reservoirs needed to provide water to all the hills if she chooses the directions optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $h_1, h_2, \dots, h_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of reservoirs.

### Constraints 
- $2 \le N \le 10^5$
- $1 \le h_i \le 10^9$ for each valid $i$
- $h_i \neq h_j $ for any valid $i \neq j$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
1
6
4 16 32 6 8 2
```

### Example Output
```
2	
```

### Explanation
**Example case 1:** We can place reservoirs on the second and third hill, pumping water to the left and right respectively.
