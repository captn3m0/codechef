---
{"category_name":"hard","problem_code":"BIPPAIR","problem_name":"Precise Bipartite Pairing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"zac_adm","problem_tester":null,"date_added":"21-04-2020","tags":{"0":"algebra","1":"determinant","2":"matching","3":"may20","4":"polynomial","5":"randomized","6":"super","7":"zac_adm","8":"zac_adm"},"problem_difficulty_level":"Super-Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIPPAIR","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIPPAIR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/BIPPAIR.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/BIPPAIR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/BIPPAIR.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/BIPPAIR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/BIPPAIR.pdf) as well.

**This is the easier version of the problem PRECPAIR.**

**ATTEN-SHUN!** Time for the squad to line up for inspection in the barracks. Your soldiers should form two lines of equal length, one on each side of the room. The lineup should create pairs of soldiers who can see each other, i.e. each soldier A should be looking directly at another soldier B, who is in turn looking at A.

Today is a special day ― your commanding officer (CO) is joining the inspection. As such, you want your soldiers to line themselves up in the best possible way. Your CO does not know which soldier sleeps in which bunk, so you are able to rearrange them to get a better lineup.

There are $N$ soldiers (numbered $0$ through $N-1$) and $\frac{N(N-1)}{2} - M$ pairs of soldiers that are friends. You cannot have any two soldiers facing each other if they are friends, because friends might goof off during the inspection and embarrass you in front of your CO. Furthermore, certain pairings of soldiers that face each other work better than others ― for each pair of soldiers that are not friends, you are given a certain value which this pair would add to the lineup. Then, the value of a lineup is the sum of values of all pairs of soldiers that face each other in that lineup.

Your CO is keen ― if the value of your lineup is too big, they might suspect that you are rigging it. On the other hand, if the total value is too small, you will not leave a great impression on the CO. If only you knew the greatest value you could reach such that you still avoid suspicion! To plan ahead, you want to know all values $K$ such that it is possible to construct a lineup with value $K$.

Formally, you should find all integers $K$ such that it is possible to pair up the soldiers while satisfying the following conditions:
- There are exactly $N/2$ unordered pairs of soldiers.
- Each soldier is part of exactly one pair.
- Whenever two soldiers are paired, they are not friends.
- The sum of values of all $N/2$ pairs is exactly $K$.

Finally, unlike in the problem PRECPAIR, you made the following observation: the soldiers can be partitioned into two groups with size $N/2$ such that any two soldiers that are not friends are in different groups.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- Each of the following $M$ contains three space-separated integers $a$, $b$ and $v$ denoting that soldiers $a$ and $b$ are not friends and their pairing has value $v$.

### Output
If there is no valid lineup, print a single line containing the string `"YOU ARE IN TROUBLE"` (without quotes).

Otherwise, print two lines.
- The first of these lines should contains a single integer $V$ ― the number of distinct integers $K$ such that a valid lineup with value $K$ exists.
- The second line should contain $V$ space-separated integers ― these values of $K$ in increasing order.

### Constraints
- $2 \le N \le 100$
- $N$ is even
- $0 \le M \le N \cdot (N-1) / 2$
- $0 \le a \lt b \lt N$
- all pairs $(a, b)$ are pairwise distinct
- $0 \le v \le 20$

### Subtasks
**Subtask #1 (30 points):** $v \le 1$

**Subtask #2 (70 points):** original constraints

### Example Input 1
```
6 7
0 1 0
1 2 1
3 4 1
4 5 1
0 3 0
1 4 1
2 5 0
```

### Example Output 1
```
2
1 2
```

### Explanation
There are three valid lineups: $[(0,1), (3, 4), (2, 5)]$ with value $1$, $[(0,3), (1,4), (2,5)]$ with value $1$ and $[(0,3), (1,2), (4,5)]$ with value $2$.

### Example Input 2
```
2 1
0 1 3
```

### Example Output 2
```
1
3
```

### Explanation
There is only a single lineup $[(0,1)]$ and its value is $3$.

### Example Input 3
```
6 5
0 1 0
1 2 0
1 4 0
2 3 0
2 5 0
```

### Example Output 3
```
YOU ARE IN TROUBLE
```

### Explanation
There is no way to pair up the soldiers such that no two friends face each other.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>