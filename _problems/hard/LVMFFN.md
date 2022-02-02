---
{"category_name":"hard","problem_code":"LVMFFN","problem_name":"LOVEMUFFIN","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 2\n5 5\n1 100","output":"2\n100","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"4-06-2019","tags":{"0":"kmaaszraa"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LVMFFN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/LVMFFN.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/LVMFFN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/LVMFFN.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/LVMFFN.pdf) and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/LVMFFN.pdf) as well.

OWCA has fallen and now, L.O.V.E.M.U.F.F.I.N are finally free to do whatever they want.

In order to celebrate their victory, the $N$ members of L.O.V.E.M.U.F.F.I.N (numbered $1$ through $N$) want to have some ice-cream. But first, they need to divide the loot they found in OWCA's headquarters. The loot consists of $M$ dollar bills. In the order from member $1$ to member $N$, the members of L.O.V.E.M.U.F.F.I.N start to propose plans to divide the loot, i.e. the number of dollar bills each member should receive (not necessarily the same for everyone). Whenever someone proposes a plan, a vote is held. Let's denote the current number of members of L.O.V.E.M.U.F.F.I.N by $x$. If at least $\left\lfloor\frac{x}{K}\right\rfloor + 1$ members vote *for* a plan, this plan is accepted, the loot is distributed accordingly, no other plans are proposed and everyone goes for icecream. Otherwise, the person who proposed the plan is thrown off the roof for wasting the others' time with nonsense and the next person proposes a plan.

As we all know, all members of L.O.V.E.M.U.F.F.I.N are smart evil scientists. Therefore, during each vote and for each member, this member will vote against the currently proposed plan if they are sure that if this plan is rejected, they will gain at least as much loot as if it was accepted. Assume that all scientists act optimally and are aware that everyone else also acts optimally. We consider those who are thrown off the roof to gain exactly $-10^{100}$ dollars in loot, since they will not live to see another day.

Dr. D happens to be the first person to devise a plan. Can Dr. D avoid being thrown off the roof? If so, what is the maximum amount of loot Dr. D can gain? You should find the answers for multiple scenarios; in each scenario, $N$ and $M$ can be different, but $K$ is the same for all scenarios.

### Input
- The first line of the input contains two space-separated integers $K$ and $Q$.
- Each of the next $Q$ lines contains two space-separated integers $N$ and $M$ describing a scenario.

### Output
For each scenario, print a single line. If Dr. D can avoid being thrown off the roof, this line should contain a single integer - the maximum amount of loot. Otherwise, it should contain the string `"Thrown off the roof."` (without quotes).

### Constraints
- $2 \le K \le 10^5$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le N \le 10^{18}$
- $2 \le M \le 10^{18}$

### Subtasks
**Subtask #1 (15 points):**
- $K = 2$
- $N, M \le 5,000$
- the sum of $N$ over all scenarios does not exceed $5,000$

**Subtask #2 (15 points):**
- $K = 2$
- the sum of $N$ over all scenarios does not exceed $5 \cdot 10^5$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2 2
5 5
1 100
```

### Example Output
```
2
100
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>