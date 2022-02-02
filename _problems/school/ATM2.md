---
{"category_name":"school","problem_code":"ATM2","problem_name":"ATM Machine","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"21-09-2018","tags":{"0":"ad","1":"cakewalk","2":"cook98","3":"kingofnumbers","4":"simulation","5":"taran_1407"},"time":{"view_start_date":1537727402,"submit_start_date":1537727402,"visible_start_date":1537727402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/COOK98/bengali/ATM2.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/COOK98/mandarin/ATM2.pdf) , [Russian](http://www.codechef.com/download/translated/COOK98/russian/ATM2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK98/vietnamese/ATM2.pdf) as well.

There is an ATM machine. Initially, it contains a total of $K$ units of money. $N$ people (numbered $1$ through $N$) want to withdraw money; for each valid $i$, the $i$-th person wants to withdraw $A_i$ units of money.

The people come in and try to withdraw money one by one, in the increasing order of their indices. Whenever someone tries to withdraw money, if the machine has at least the required amount of money, it will give out the required amount. Otherwise, it will throw an error and not give out anything; in that case, this person will return home directly without trying to do anything else.

For each person, determine whether they will get the required amount of money or not.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing a string with length $N$. For each valid $i$, the $i$-th character of this string should be '1' if the $i$-th person will successfully withdraw their money or '0' otherwise.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le A_i \le 1,000,000$ for each valid $i$
- $1 \le K \le 1,000,000$

### Example Input
```
2
5 10
3 5 3 2 1
4 6
10 8 6 4
```

### Example Output
```
11010
0010
```

### Explanation
**Example case 1:** The ATM machine initially contains $10$ units of money. The first person comes and withdraws $3$ units, so the amount remaining in the machine is $7$. Then the second person withdraws $5$ units and the remaining amount is $2$. The third person wants to withdraw $3$ units, but since there are only $2$ units of money in the machine, it throws an error and the third person must leave without getting anything. Then the fourth person withdraws $2$ units, which leaves nothing in the machine, so the last person does not get anything.

**Example case 2:** The ATM machine initially contains $6$ units of money, so it cannot give anything to the first and second person. When the third person comes, it gives them all the money it has, so the last person does not get anything either.
