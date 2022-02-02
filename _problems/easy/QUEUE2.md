---
{"category_name":"easy","problem_code":"QUEUE2","problem_name":"Waiting in Queue","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"27-10-2018","tags":{"0":"easy","1":"kingofnumbers","2":"maths","3":"simulation","4":"snck1b19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/QUEUE2","time":{"view_start_date":1540827000,"submit_start_date":1540827000,"visible_start_date":1540827000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S191BTST/russian/QUEUE2.pdf) , [Vietnamese](http://www.codechef.com/download/translated/S191BTST/vietnamese/QUEUE2.pdf) , [Hindi](http://www.codechef.com/download/translated/S191BTST/hindi/QUEUE2.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191BTST/mandarin/QUEUE2.pdf) and [Bengali](http://www.codechef.com/download/translated/S191BTST/bengali/QUEUE2.pdf) as well.

Chef has opened his new restaurant and made the first meal free for everyone!

You want to try the new restaurant, but since it is offering free meals, many people are coming and a huge queue has formed. Currently (at time $T=0$), there are $M$ people waiting in the queue. You also know that there are $N$ more people coming; let's denote the time when the $i$-th person stands at the back of the queue by $A_i$. You noticed that each exactly $L$ seconds, one place in the restaurant will become vacant and the person currently at the front of the queue takes it, i.e. at time $T=L$, one person enters, then at time $T=2L$, another person enters and so on.

You do not like to wait in queues, so you want to choose the time when you stand at the back of the queue in such a way that the time between this moment and the moment when you enter the restaurant is minimum possible. Assume that if you decide to stand at the back of the queue at the same moment as some other person, you will stand before them in the queue (closer to the restaurant). Also, you have to stand at the back of the queue no later than in the $K$-th second, otherwise you will arrive at home late.

What is the minimum time you have to spend standing in the queue?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $M$, $K$ and $L$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum required time.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le M \le 10^5$
- $1 \le L \le 10^4$
- $2 \le K \le 10^9$
- $1 \le A_i \le K-1$ for each valid $i$
- all elements of $A$ are distinct
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 10^3$
- $1 \le M \le 10^3$
- $2 \le K \le 10^4$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints 

### Example Input
```
4
6 5 19 3
4 8 16 12 14 18
1 10 20 3
3
5 2 6 10
1 2 5 3 4
1 1 9 5
8
```
### Example Output
```
12
16
29
2
```

### Explanation
**Example case 1:** The best time to enter the queue is $T=12$.

**Example case 2:** The best time to enter the queue is $T=20$.

**Example case 3:** The best time to enter the queue is $T=1$.

**Example case 4:** The best time to enter the queue is $T=8$.
