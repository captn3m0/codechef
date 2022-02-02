---
{"category_name":"medium","problem_code":"CLMTRO","problem_name":"Metro","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"4-02-2019","tags":{"0":"cole2019","1":"medium","2":"meooow"},"editorial_url":"https://discuss.codechef.com/problems/CLMTRO","time":{"view_start_date":1551205800,"submit_start_date":1551205800,"visible_start_date":1551205800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>


The city of Chefland has a metro network of $n$ stations where there are metro tunnels between certain pairs of stations. The budget was tight during construction, so the $n$ stations are connected using only $n - 1$ tunnels. Every station is still reachable from every other station.

Being initially constructed with such a tight budget, it is no surprise that they have fallen into disrepair over time. Chef, the mayor of Chefland, has secured $k$ dollars for renovating the metro stations. Each metro station is different and the $i^{th}$ station requires $a_i$ dollars to renovate. But, if one or more stations directly connected to the $i^{th}$ station are also being renovated, it is possible to share certain resources between the stations and the cost of renovating the $i^{th}$ station drops to $b_i$ dollars.

Help Chef figure out what is the maximum number of stations he can renovate using $k$ dollars.

### Input

- The first line contains $t$, the number of test cases. $t$ cases follow.
- The first line of each test case contains two integers $n$ and $k$.
- The next line contains $n$ integers $a_1, a_2, \dots, a_n$.
- The next line contains $n$ integers $b_1, b_2, \dots, b_n$.
- $n - 1$ lines follow, each with a pair of integers $u$ and $v$ denoting that the $u^{th}$ and $v^{th}$ stations are connected by a tunnel.

### Output

- For each testcase, output a single line containing the maximum number of stations that can be renovated.

### Constraints 

- $1 \leq t \leq 200$
- $2 \leq n \leq 5000$
- $1 \leq k \leq 10^{12}$
- $1 \leq b_i < a_i \leq 10^8$
- $1 \leq u, v \leq n$, $u \ne v$
- Sum of $n$ over all test cases does not exceed $5000$.

### Sample Input:

    3
    2 5
    5 10
    3 3
    1 2
    4 9
    5 10 3 4
    1 5 2 2
    1 2
    2 3
    3 4
    6 15
    20 20 20 20 20 20
    3 1 2 10 4 3
    1 2
    1 3
    1 4
    4 5
    5 6

### Sample Output

    1
    3
    5
	
### Explanation

**Case 1:** Renovating only station 1 costs $a_1 = 5$. Renovating only station 2 costs $a_2 = 10$. Renovating both 1 and 2 costs $b_1 + b_2 = 3 + 3 = 6$. Only station 1 can be renovated with 5 dollars.  
![sample1](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2019/CLMTRO/metro_sample_1.png)

**Case 2:** Stations 1, 3 and 4 can be renovated for a total cost of $a_1 + b_3 + b_4 = 5 + 2 + 2 = 9$. Stations 2, 3, 4 can also be renovated with 9 dollars. It is not possible to renovate all 4 stations with 9 dollars or less.
![sample1](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2019/CLMTRO/metro_sample_2.png)

**Case 3:** Stations 1, 2, 3, 5 and 6 can be renovated at a cost of $b_1 + b_2 + b_3 + b_5 + b_6 = 3 + 1 + 2 + 4 + 3 = 13$. More than 5 stations cannot be renovated with 15 dollars or less.
![sample1](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2019/CLMTRO/metro_sample_3.png)