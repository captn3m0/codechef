---
{"category_name":"easy","problem_code":"SPREAD2","problem_name":"Spread the Word","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"10-10-2018","tags":{"0":"easy","1":"kingofnumbers","2":"prefix","3":"snckql19","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/SPREAD2","time":{"view_start_date":1539698400,"submit_start_date":1539698400,"visible_start_date":1539698400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19QLTST/hindi/SPREAD2.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19QLTST/mandarin/SPREAD2.pdf), [Russian](http://www.codechef.com/download/translated/S19QLTST/russian/SPREAD2.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19QLTST/vietnamese/SPREAD2.pdf) and [Bengali](http://www.codechef.com/download/translated/S19QLTST/bengali/SPREAD2.pdf) as well.

Snackdown 2019 is coming! People have started to spread the word and tell other people about the contest.

There are $N$ people numbered $1$ through $N$. Initially, only person $1$ knows about Snackdown. On each day, everyone who already knows about Snackdown tells other people about it. For each valid $i$, person $i$ can tell up to $A_i$ people per day. People spread the information among the people who don't know about Snackdown in the ascending order of their indices; you may assume that no two people try to tell someone about Snackdown at the same moment. Each person is only allowed to start telling other people about Snackdown since the day after he/she gets to know about it (person $1$ can start telling other people already on day $1$). How many days does it take for all people to know about Snackdown?


### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of days.

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- the sum of $N$ for all test cases does not exceed $10^6$
- $0 \le A_i \le N$ for each valid $i$
- $1 \le A_1$

### Example Input
```
2
7
2 1 1 5 5 5 5
5
5 1 3 2 1
```

### Example Output
```
2
1
```

### Explanation
**Example case 1:** On day $1$, person $1$ tells people $2$ and $3$ about Snackdown. On day $2$, the first three people know about Snackdown, so they can tell $2+1+1 = 4$ people about it in a single day. That means the last four people get to know about Snackdown on day $2$, so the total number of days is $2$.

**Example case 2:** On each day, person $1$ can tell up to $5$ people about Snackdown, so on the first day, he simply tells all people about it and the total number of days is $1$.
