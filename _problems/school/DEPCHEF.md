---
{"category_name":"school","problem_code":"DEPCHEF","problem_name":"Deputy Chef","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"stelkasouridis","problem_tester":null,"date_added":"29-01-2019","tags":{"0":"array","1":"feb19","2":"observations","3":"simple","4":"stelkasouridis"},"editorial_url":"https://discuss.codechef.com/problems/DEPCHEF","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/DEPCHEF.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/DEPCHEF.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/DEPCHEF.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/DEPCHEF.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/DEPCHEF.pdf) as well.

A battle is going to begin in the kingdom of Airland. There are $N$ soldiers in the kingdom, numbered $1$ through $N$ and standing in a circle in such a way that for each valid $i$, the soldier directly to the right of the $i$-th soldier is soldier $i+1$, and the soldier directly to the right of the $N$-th soldier is soldier $1$.

Each soldier holds a sword and a shield. The sword is used to attack other soldiers and the shield is used to defend from attacks. Let's denote the *attack value* of the $i$-th soldier's sword by $a_i$ and the *defense value* of the $i$-th soldier's shield by $d_i$.

In the battle, each soldier picks one of the soldiers standing to his left and right, and attacks that soldier. The choices of the soldiers are completely independent, so each soldier can be attacked by the soldier to his left, by the soldier to his right (the power of such an attack is the attack value of the attacking soldier's sword), by both of them (then, the power of the resulting attack is the sum of the attack values of these soldiers' swords) or by nobody. A soldier remains alive if the defense value of his shield is strictly greater than the power with which he is attacked. Everyone attacks simultaneously and there is only one round of attacks. Each soldier that remains alive at the end is awarded a laurel.

The king of Airland likes these fights, so the host of the battle promised the king that he can pick one soldier and if the soldier he picks survives the battle, the king receives the shield of that soldier.

Chef is the deputy of the king and you want to help him pick a soldier for the king in such a way that the king receives the best shield (with the greatest defense value). However, if Chef picks a soldier and that soldier does not survive, Chef will be thrown in a snake pit. Therefore, it should be guaranteed that the chosen soldier will survive regardless of the decisions of the other soldiers.

Can you help Chef make the best choice and tell him the defense value of the shield which the king gets, or decide that he can be thrown in the snake pit no matter which soldier he picks?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The third line contains $N$ space-separated integers $d_1, d_2, \ldots, d_N$.

### Output
For each test case, print a single line containing one integer ― the best defense value of the shield the king gets, or $-1$ if Chef can be thrown in the snake pit.

### Constraints 
- $1 \le T \le 100$
- $3 \le N \le 100$
- $1 \le a_i, d_i \le 10^4$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4
1 1 4 1
3 4 2 1
7
5 4 5 4 5 4 5
3 2 4 7 2 5 9
```

### Example Output
```
3
-1
```

### Explanation
**Example case 1:** Soldier $1$ can be attacked by soldier $2$ and/or soldier $4$. If only soldier $2$ attacks him, the power of the attack is $1$. If only soldier $4$ attacks him, the power of the attack is $1$ again. If they attack together, the power of the attack is $2$. In each of these cases, soldier $1$ will live.

Soldier $2$ can be attacked by soldier $3$, with attack power $4$. His shield has defense value $4$, which is not enough, so in this case, soldier $2$ would die. The best safe choice is soldier $1$, with defense value $3$.

**Example case 2:** No soldier is guaranteed to survive the battle, so the answer is $-1$.
