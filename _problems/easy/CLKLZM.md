---
{"category_name":"easy","problem_code":"CLKLZM","problem_name":"Killing Zombies","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"4-04-2018","tags":{"0":"cole2018","1":"easy","2":"heap","3":"meooow"},"editorial_url":"https://discuss.codechef.com/problems/CLKLZM","time":{"view_start_date":1524062940,"submit_start_date":1524062940,"visible_start_date":1524062940,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>  

The zombie apocalypse is here and Chef is stuck at an old construction site. The site is surrounded by walls on three sides. On the fourth side is a fence where $N$ zombies are standing in a row. The zombies are numbered from $1$ to $N$ from left to right. Zombie $i$ has $Z_i$ health points initially.

Luckily there are $M$ cranes Chef has access to. The $i^{th}$ crane carries $K_i$ construction beams. Chef can drop any number $\ge 0$ and $\le K_i$ of these beams from crane $i$ and they will hit all zombies whose numbers lie between $L_i$ to $R_i$ both inclusive. A single beam decreases the health of all zombies it hits by $1$ point. If a zombie's health equals $0$ after being hit it is considered dead.

Can Chef kill all the zombies using the beams? If yes, what is the minimum number of beams that Chef has to drop to achieve this?

**Warning: Large I/O, it is advisable to use fast I/O methods.**

### Input:
- The first line contains $T$, number of testcases. 
- The first line of each test case contains two integers $N$ and $M$.
- The second line of each test case contains $N$ integers $Z_1, Z_2, ..., Z_N$.
- $M$ lines follow. The $i^{th}$ line contains $3$ integers $L_i$, $R_i$ and $K_i$.

### Output:
- For each test case, if it is possible for Chef to kill all the zombies print a single line containing "**YES**" followed by the minimum number of beams he needs to drop. If it is impossible, print "**NO**" instead. (Note that the judge is case-sensitive)

### Constraints 
- $1 \leq T \leq 10$
- $1 \leq N, M \leq 10^5$
- Sum of $N$ over all test cases $\leq 3 \cdot 10^5$
- Sum of $M$ over all test cases $\leq 3 \cdot 10^5$
- $1 \leq Z_i \leq 10^9$
- $1 \leq L_i \leq R_i \leq N$
- $1 \leq K_i \leq 10^9$

### Sample Input:
    2
    5 5
    1 2 3 4 5
    1 2 3
    1 5 1
    2 4 3
    3 5 3
    4 5 3
    3 2
    2 5 2
    1 2 2
    2 3 2

### Sample Output:
    YES 6
    NO
	
### Explanation:
- **Case 1**: One possible way is for Chef to drop the only beam from crane 2, 1 beam from crane 3, 1 beam from crane 4 and all 3 beams from crane 5.
- **Case 2**: Zombie 1 and 3 can be killed but zombie 2 remains at health 1 even if all the beams are dropped.