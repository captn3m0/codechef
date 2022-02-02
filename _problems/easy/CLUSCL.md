---
{"category_name":"easy","problem_code":"CLUSCL","problem_name":"Useless Clocks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"29-03-2018","tags":{"0":"cole2018","1":"meooow","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CLUSCL","time":{"view_start_date":1524062940,"submit_start_date":1524062940,"visible_start_date":1524062940,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>  

> "Even a broken clock is right twice a day"

For those unfamiliar with the above proverb, the statement refers to a stopped 12 hour clock. The time it shows happens to coincide with the true time twice every 24 hours.

Chef has a useless clock which does not run properly. More specifically, it runs at $K$ times the rate of a correct clock, where $K \ne 1$. It may even be that $K$ is negative, which means the clock runs backwards. Chef also has a clock which precisely shows the current time without error.

At 12 am on day $1$ Chef sets the useless clock to point to 12:00. Of course Chef's correct clock already points to 12:00. Chef wonders on which day the time shown by the useless clock will coincide with the correct clock for the $N^{th}$ time. 

Can you help him find the answer without having to wait for that many days?   
Note that 12 am of day $d$ is considered the first instant of day $d$. Since the clocks initially show the same time at 12 am of day $1$, that is counted as the first time they coincide.

###Input:
- First line will contain $T$, the number of test cases.
- The next $T$ lines each contain 3 integers $p$, $q$ and $N$, where $\frac{p}{q} = K$.

###Output:
- For each test case, output a single integer which is the day on which the times of the clocks coincide for the $N^{th}$ time.

###Constraints 
- $1 \leq T \leq 10^5$
- $-100 \leq K \leq 100$
- $K \ne 1$
- $1 \leq q \leq 10^4$
- $1 \leq N \leq 10^6$

###Sample Input:
    4
    0 1 5
    -1 2 3
    2 1 10
    99 100 2

###Sample Output:
    3
    1
    5
    51
	
###Explanation:
- **Case 1**: Here $K = 0$. A broken clock is right twice a day. So it will be right for the fifth time on day $3$.
- **Case 2**: Here $K = -1/2$. The clock moves backwards at half the rate of the correct clock. The time displayed will coincide with the true time first at 12 am, then at 8 am and for the third time at 4 pm on day $1$.
