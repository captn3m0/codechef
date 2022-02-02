---
{"category_name":"school","problem_code":"ADASTAIR","problem_name":"Ada and the Staircase","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"17-10-2018","tags":{"0":"alei","1":"cakewalk","2":"cook99","3":"maths","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/ADASTAIR","time":{"view_start_date":1540146602,"submit_start_date":1540146602,"visible_start_date":1540146602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK99/hindi/ADASTAIR.pdf), [Spanish](http://www.codechef.com/download/translated/COOK99/spanish/ADASTAIR.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/COOK99/mandarin/ADASTAIR.pdf), [Russian](http://www.codechef.com/download/translated/COOK99/russian/ADASTAIR.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK99/vietnamese/ADASTAIR.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK99/bengali/ADASTAIR.pdf) as well.


There is a big staircase with $N$ steps (numbered $1$ through $N$) in ChefLand. Let's denote the height of the top of step $i$ by $h_i$. Chef Ada is currently under the staircase at height $0$ and she wants to reach the top of the staircase (the top of the last step). However, she can only jump from height $h_i$ to the top of a step at height $h_f$ if $h_f-h_i \le K$. To help Ada, we are going to construct some intermediate steps; each of them may be constructed between any two steps, or before the first step, and have any height. What is the minimum number of steps that need to be added to the staircase so that Ada could reach the top?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-seperated integers $h_1, h_2, \dots, h_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of steps.

### Constraints 
- $1 \le T \le 64$
- $1 \le N \le 128$
- $1 \le K \le 1,024$
- $1 \le h_i \le 1,024$ for each valid $i$
- $h_i \lt h_{i+1}$ for each valid $i$

### Example Input
```
1
4 3
2 4 8 16
```

### Example Output
```
3
```
