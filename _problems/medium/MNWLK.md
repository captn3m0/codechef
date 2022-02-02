---
{"category_name":"medium","problem_code":"MNWLK","problem_name":"Moonwalk","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"14-10-2019","tags":{"0":"bipartite","1":"cook111","2":"cycle","3":"easy","4":"kmaaszraa","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MNWLK","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MNWLK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/MNWLK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/MNWLK.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/MNWLK.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/MNWLK.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK111/bengali/MNWLK.pdf) as well.

Heinz has recently learnt to moonwalk! Now he wants to practice it in the central park.

We know that Danville's central park consists of $N$ junctions (numbered $1$ through $N$) and that $M$ pairs of these junctions are connected by one-way roads (numbered $1$ through $M$). First, Heinz picks a junction he starts from. Then, he alternately performs the following actions, starting with walking:
- Walk his way out of his current junction to another junction by a one-way road leading to that junction from his current junction.
- Moonwalk his way out of his current junction to another junction by a one-way road leading from that junction to his current junction. When Heinz does this, he is actually breaking the law (since he is using the one-way road in the wrong direction), but since he is moonwalking, no one will notice.

Heinz plans to end up in the junction where he started after performing an even number of actions. However, he does not want to use any of the one-way roads more than once in any direction (using a road for both walking and moonwalking is not allowed either). It's worth noting that Heinz must walk at least one one-way road. Can he achieve this goal? If he can, find a sequence of roads he should use.

### Input
- The first line of input contains an integer $T$, the number of cases to process.
- The first line of each case contains two space-separated integers $N$ and $M$.
- The next $M$ lines of each case each contains two space-separated integers $v$ and $u$ denoting a one-way road from junction $v$ to junction $u$.

### Output
- For each case, if Heinz cannot achieve his goal, print a single line containing the string ":(".
- Otherwise, print three lines.
- The first of these lines should contain the string ":)".
- The second line should contain an even integer $K$ denoting the number of roads Heinz should use.
- The third line should contain $K$ space-separated integers denoting the numbers of the roads Heinz should use, in the correct order.

If there are multiple solutions, you may output any one of them.

### Constraints
- $1 \le T \le 5$
- $1 \le N, M \le 2 \cdot 10^5$
- $1 \le v, u \le N$

### Example Input
```
2
3 3
1 2
3 2
3 1
4 5
1 2
3 2
1 4
2 3
3 4
```

### Example Output
```
:(
:)
4
3 5 2 1 
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>