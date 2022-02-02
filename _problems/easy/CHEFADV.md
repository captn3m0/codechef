---
{"category_name":"easy","problem_code":"CHEFADV","problem_name":"Chef and Adventures","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"27-08-2018","tags":{"0":"divisbility","1":"hindi","2":"math","3":"mgch","4":"modulo","5":"sept18","6":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEFADV","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/CHEFADV.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/CHEFADV.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/CHEFADV.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/CHEFADV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/CHEFADV.pdf) as well.


Mysterious Chefland... Recently, Chef realised that Discuss, the educational system of Chefland, is out of date. Therefore, he is trying to find ways to update the infrastructure in the country. One possible way is to move all materials from Discuss to Discourse.

Chef will have access to Discourse if his *knowledge* and *power* become exactly equal to $N$ and $M$ respectively. Initially, he has power $1$ and knowledge $1$.

Chef can perform actions of the following types to improve his skills:
- solve a problem — increase his knowledge by $X$
- do a push-up — increase his power by $Y$
- install ShareChat to keep in touch with friends — increase both knowledge and power by $1$

Chef can only install ShareChat at most once. The remaining actions may be performed any number of times and the actions may be performed in any order.

Help Chef find out whether it is possible to move from Discuss to Discourse.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $M$, $X$ and $Y$.

### Output
For each test case, print a single line containing the string `"Chefirnemo"` if it is possible to reach the required knowledge and power or `"Pofik"` if it is impossible.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N, M, X, Y \le 10^9$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, M, X, Y \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
5
2 2 1 2
11 10 5 9
11 11 5 9
12 11 5 9
1 2 1 100
```

### Example Output
```
Chefirnemo
Chefirnemo
Pofik
Chefirnemo
Pofik
```

### Explanation
**Example case 2:** We add $Y=9$ once to the power to get power $10$. We add $X=5$ twice to the knowledge to get knowledge $11$.

**Example case 3:** We can see that it is impossible to reach power $M=11$ no matter which or how many operations we do. Note that the ShareChat operation will increase both knowledge and power by $1$, and hence it will still be impossible to attain the given values of knowledge and power at the same time.

**Example case 4:** We can reach knowledge $11$ and power $10$ like in example case 2, the only difference is that we also use the ShareChat operation to increase both by $1$.
