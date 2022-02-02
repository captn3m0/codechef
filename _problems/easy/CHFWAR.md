---
{"category_name":"easy","problem_code":"CHFWAR","problem_name":"Codechef War","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n12 34 45 5\r\n10\r\n5\r\n10 15 43 20\r\n5","output":"possible\r\n4 100\r\nimpossible","explanation":"**Example case 1:** When Josh is at the position $P = 4$, the soldiers\u0027 initial powers in clockwise order around the circle, starting with soldier $1$, are $[12, 34, 45, D, 5]$ ($D$ denotes Josh). Then, the following happens:\r\n- The soldier with power $12$ attacks the soldier with power $34$ and kills him.\r\n- The soldier with power $45$ attacks Josh, who defends. The living soldiers\u0027 powers are now $[12, 45, D-45, 5]$ and Josh is the attacking soldier.\r\n- Josh does not attack, so the soldier to his right (with power $5$) becomes the attacking soldier. He attacks the soldier with power $12$ and kills him.\r\n- The soldier with power $45$ attacks Josh again and Josh defends again.\r\n- The soldier with power $5$ attacks the soldier with power $45$ and kills him.\r\n- Now, two soldiers are left: Josh (with a shield with defense power $D-90$) and the soldier with a sword with power $5$. Each of them is attacked with firepower $F=10$, so the power of Josh\u0027s shield drops to $D-100$ and the other soldier dies.\r\n\r\nIf Josh survives, his shield\u0027s initial power $D$ should be at least $45+45+10 = 100$. For all other positions $P$, Josh cannot survive.\r\n\r\n**Example case 2:** Regardless of how large $D$ is and which position Josh chooses, after Chefland\u0027s attack, a soldier of Bitland other than Josh will always survive. This soldier will then attack Josh until his shield breaks and he dies.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deadshot_sb","problem_tester":null,"date_added":"23-05-2019","tags":{"0":"bitwise","1":"deadshot_sb","2":"july19","3":"medium"},"problem_difficulty_level":"Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/CHFWAR","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFWAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/CHFWAR.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/CHFWAR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/CHFWAR.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/CHFWAR.pdf) and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/CHFWAR.pdf) as well.

Bitland declared war on Chefland and sent an army to fight them, but Chefland defended efficiently and Bitland's army has been reduced to $N$ soldiers. They have no chance of winning the war and do not want to surrender, so they are planning to commit group suicide. Josh, the leader of Bitland's remaining soldiers, has different plans — he wants to survive and somehow escape.

The soldiers are numbered $1$ through $N$; Josh is soldier $N$. The soldiers are going to stand in a circle in the order $1, 2, \ldots, P-1, N, P, P+1, \ldots, N-1$. Formally, they are standing in the circle in such a way that if Josh's position is $P$ ($1 \le P \le N$), then for each $i$ ($1 \le i \le N-2$, $i \neq P-1$), soldier $i+1$ is directly to the right of soldier $i$, soldier $P$ (if $P \le N-1$) or $1$ (if $P = N$) is directly to the right of Josh and Josh is directly to the right of soldier $P-1$ (if $P \ge 2$) or soldier $N-1$ (if $P = 1$); if $2 \le P \le N-2$, soldier $1$ is also directly to the right of soldier $N-1$. For each $i$ ($1 \le i \le N-1$), soldier $i$ has a sword with power $A_i$. Josh plans to take a shield with sufficiently high defense power $D$.

First, the soldiers start to commit group suicide according to the following rules:
- Initially, soldier $1$ is the *attacking soldier*.
- If the attacking soldier is not Josh, this soldier attacks the soldier that is currently to his right.
- When Josh is attacked with power $a$, the current defense power of his shield decreases by $a$, and if it becomes negative, Josh dies. When a different soldier is attacked, he does not try to defend and dies immediately. The power of the attacking soldier's sword does not change.
- Then, the next living soldier to the right of the current attacking soldier becomes the attacking soldier and the process continues until there is only one soldier left.

It is clear that this way, Josh cannot be the last survivor. However, Chefland's general Chef plans to interrupt this process as soon as there are exactly two living soldiers of Bitland left (Josh wants to be one of them) by attacking them with Chefland's full firepower $F$. Since this attack is unexpected, both attacked soldiers try to defend independently with the weapons they have. Josh survives if the current defense power of his shield is at least $F$. Any other soldier survives only if the power of his sword is strictly greater than $F$. Since Chefland does not attack again, if both Josh and another soldier survive, then the other soldier will kill Josh. Therefore, Josh wants to be the only survivor of Chefland's attack.

Your task is to find the minimum possible value of $D$ such that Josh survives if he chooses his position $P$ optimally (or determine that he cannot survive) and the lowest position $P$ such that Josh survives if he takes a shield with this defense power $D$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N-1$ space-separated integers $A_1, A_2, \ldots, A_{N-1}$.
- The third line contains a single integer $F$.

### Output
For each test case, first, print a line containing the string `"possible"` if Josh can survive or `"impossible"` if he cannot (without quotes). Then, if he can survive, print a second line containing two space-separated integers $P$ and $D$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 1,000,000$
- $1 \le A_i \le 10,000$ for each valid $i$
- $1 \le F \le 10,000$
- the sum of $N$ over all test cases does not exceed $1,000,005$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le T \le 10$
- $2 \le N \le 100$
- $1 \le A_i \le 100$ for each valid $i$
- $1 \le F \le 100$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
5
12 34 45 5
10
5
10 15 43 20
5
```

### Example Output
```
possible
4 100
impossible
```

### Explanation
**Example case 1:** When Josh is at the position $P = 4$, the soldiers' initial powers in clockwise order around the circle, starting with soldier $1$, are $[12, 34, 45, D, 5]$ ($D$ denotes Josh). Then, the following happens:
- The soldier with power $12$ attacks the soldier with power $34$ and kills him.
- The soldier with power $45$ attacks Josh, who defends. The living soldiers' powers are now $[12, 45, D-45, 5]$ and Josh is the attacking soldier.
- Josh does not attack, so the soldier to his right (with power $5$) becomes the attacking soldier. He attacks the soldier with power $12$ and kills him.
- The soldier with power $45$ attacks Josh again and Josh defends again.
- The soldier with power $5$ attacks the soldier with power $45$ and kills him.
- Now, two soldiers are left: Josh (with a shield with defense power $D-90$) and the soldier with a sword with power $5$. Each of them is attacked with firepower $F=10$, so the power of Josh's shield drops to $D-100$ and the other soldier dies.

If Josh survives, his shield's initial power $D$ should be at least $45+45+10 = 100$. For all other positions $P$, Josh cannot survive.

**Example case 2:** Regardless of how large $D$ is and which position Josh chooses, after Chefland's attack, a soldier of Bitland other than Josh will always survive. This soldier will then attack Josh until his shield breaks and he dies.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>