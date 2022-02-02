---
{"category_name":"easy","problem_code":"BUDDYNIM","problem_name":"Buddy NIM","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"1-11-2018","tags":{"0":"bciobanu","1":"easy","2":"game","3":"greedy","4":"snckpe19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/BUDDYNIM","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/BUDDYNIM.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/BUDDYNIM.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/BUDDYNIM.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/BUDDYNIM.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/BUDDYNIM.pdf) as well.

Alice, Bob and Charlie are playing a new game called Buddy NIM. The game is played at two tables; on the first table, there are $N$ heaps containing $A_1, A_2, \ldots, A_N$ stones and on the second table, there are $M$ heaps containing $B_1, B_2, \ldots, B_M$ stones respectively.

Initially, Alice is playing at the first table and Bob is playing at the second table. The players take their turns in this order: Charlie, Alice, Bob, Charlie, etc.

Alice and Bob follow the rules for classical NIM - on Alice's turn, Alice must remove a positive number of stones from one of the piles at her current table and on Bob's turn, Bob must remove a positive number of stones from one of the piles at his current table. Whoever cannot remove any stone from a pile loses.

Charlie does not play at any table. Instead, on his turn, he decides if Alice and Bob should keep playing at their respective tables or swap places.

Alice and Charlie are buddies and they cooperate, playing in the optimal way that results in Alice's victory (if possible).

It is clear that either Alice or Bob wins the game eventually. You must find out who the winner will be.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each testcase contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ space-separated integers $B_1, B_2, \ldots, B_M$.

### Output
Print a single line containing the string `"Alice"` if Alice wins or `"Bob"` if Bob wins.

### Constraints 
- $1 \le T \le 10^2$
- $1 \le N, M \le 10^2$ 
- $0 \le A_i \le 10^9$ for each valid $i$
- $0 \le B_i \le 10^9$ for each valid $i$

### Example Input
```
3
3 1
1 1 1
3
3 1
1 2 4
7
1 1
1
1
```

### Example Output
```
Alice
Alice
Bob
```
