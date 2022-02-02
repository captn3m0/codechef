---
{"category_name":"hard","problem_code":"KHULJA","problem_name":"Alohomora","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"jtnydv25"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Hermione, Harry and Ron are at the entrance of the locked door in the flying key room. Ofcourse, they try the age old spell "Alohomora" but the door won't open. To open the door they must use the key to the lock.

The lock consists of $n$ disks. Each disk shows a digit from $0$ to $9$. Currently the $i^{\text{th}}$ disk shows digit $s_i$, making a string $s = s_1 s_2 \ldots s_n$. When a disk in the lock shows $i$ it can be rotated clockwise in time $a_i$  seconds to show $(i + 1) \% 10$, where $\%$ denotes the modulo operator. You can rotate any disk of the lock clockwise any number of times.

Similarly, the key consists of $m \leq n$ disks. Each disk shows a digit from $0$ to $9$. Currently the $i^{\text{th}}$ disk shows digit $t_i$, making a string $t = t_1 t_2 \ldots t_m$. When a disk in the key shows $i$, it can be rotated clockwise in time $b_i$ seconds to show $(i + 1) \% 10$. You can rotate any disk of the key clockwise any number of times.

The door opens when the string represented by the key is a substring of the string represented by the lock. 

Find the minimum time (in seconds) in which they can unlock the door.

Please note that they **can't** rotate two disks (from the set of $n + m$ disks) simultaneously.

###Input:

- The first line contains two integers, $n$ and $m$ denoting the length of strings $s$ and $t$ respectively.
- The second line contains the string $s$, the lock string.
- The third line contains the string $t$, the key string.
- The fourth line contains 10 space separated integers denoting $a_0, a_1, \cdots, a_9$
- The fifth line contains 10 space separated integers denoting $b_0, b_1, \cdots, b_9$

###Output:

Output a single integer denoting the minimum time (in seconds) in which the door can be opened.

###Constraints 
- $1 \leq m \leq n \leq 2 \times 10^5$
- $|s| = n$
- $|t| = m$ 
- Both $s$ and $t$ consist of digits from $0$ to $9$.
- $1 \le a_i, b_i \le 1000$ for all $0 \le i \le 9$

###Sample Input 1:
```
2 1
60
8
2 2 3 2 1 3 3 3 1 2 
2 2 3 3 3 2 2 3 2 2
```
###Sample Output 1:
```
4
```


###Sample Input 2:
```
4 3
6152
243
2 3 1 2 2 3 1 1 3 1 
1 2 2 1 2 3 2 3 3 1
```
###Sample Output 2:
```
6
```

###EXPLANATION:
Example $1$ : Don't rotate any of the disks in the lock string. In the key string, we can rotate the disk two times, $8 \rightarrow 9$ in time $b_8 = 2$ seconds, and then $9 \rightarrow 0$ in time $b_9 = 2$ seconds to get a string `0`. which is a substring of the string `60`. 

Example $2$ : In the lock, rotate the second disk once in time $3$ seconds and fourth disk once in time $1$ second. In the key, rotate the second disk once in time $2$ seconds. The lock string becomes `6253`, and the key string becomes `253`, which is a substring of the lock string. The total time taken is $3 + 1 + 2 = 6$ seconds.