---
{"category_name":"easy","problem_code":"NOCHANGE","problem_name":"No Change Required","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"7-01-2020","tags":{"0":"alex_2oo8","1":"easy","2":"feb20","3":"math","4":"observation","5":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NOCHANGE","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NOCHANGE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/NOCHANGE.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/NOCHANGE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/NOCHANGE.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/NOCHANGE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/NOCHANGE.pdf) as well.

Chef lives in a country that uses coins of $N$ denominations. For each valid $i$, one coin of denomination $i$ is worth $D_i$ cents.

A bus ticket, when bought from the driver, costs $P$ cents and can be paid for only with coins. Moreover, to save time, bus drivers never give back any change.

Chef is wondering if it is possible that someone would have enough coins to buy a ticket, but would be forced to overpay for it (pay more than $P$ cents), or if it is always possible to pay exactly $P$ cents when it is possible to buy a ticket, regardless of the values of the coins the person buying the ticket has.

If it is possible to be forced to overpay, please find any such example ― any multiset of coins such that in total, they are worth strictly more than $P$ cents, but if any coin is removed from this multiset, the total worth of the remaining coins is strictly smaller than $P$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $P$.
- The second line contains $N$ space-separated integers $D_1, D_2, \dots, D_N$.

### Output
For each test case:
- If it is impossible for someone to be forced to overpay, print a single line containing the string `"NO"` (without quotes).
- Otherwise, print a single line containing the string `"YES"`, followed by a space and $N$ space-separated integers $C_1, C_2, \ldots, C_N$ such that:
    - $0 \le C_i \le 10^9$ for each valid $i$
    - $P \lt S = \sum_{i=1}^N C_i \cdot D_i$
    - for each valid $i$, if $C_i \gt 0$, then $S - D_i \lt P$

### Constraints
- $1 \le T \le 10^4$
- $1 \le N \le 10^3$
- $1 \le P \le 10^9$
- $1 \le D_1 \lt D_2 \lt \dots \lt D_N \leq 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (8 points):**
- $T \le 50$
- $N \le 5$
- $P \le 20$
- $D_i \le 20$ for each valid $i$

**Subtask #2 (24 points):**
- $P \le 10^3$
- $D_i \le 10^3$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #3 (68 points):** original constraints

### Example Input
```
3
2 10
1 5
2 4
1 5
3 25
3 5 10
```

### Example Output
```
NO
YES 0 1
YES 2 0 2
```
	
### Explanation
**Example case 1:** No matter how many $5$-cent coins and how many $1$-cent coins a person has, if the total sum is at least $10$, they will always be able to pay precisely $10$ cents without requiring any change.

**Example case 2:** If a person has a single $5$-cent coin and nothing else, they will not be able to pay precisely $4$ cents and will be forced to overpay by giving away his only coin.

**Example case 3:** If a person has two $3$-cent coins, two $10$-cent coins and no $5$-cent coins, then the only way to pay $25$ cents is by giving away all the coins. They are worth $26$ cents in total, so this person is forced to overpay by $1$ cent.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>