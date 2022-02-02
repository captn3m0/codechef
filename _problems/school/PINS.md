---
{"category_name":"school","problem_code":"PINS","problem_name":"Strike or Spare","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"abizerl123","problem_tester":null,"date_added":"3-07-2018","tags":{"0":"abizerl123","1":"cakewalk","2":"july18"},"editorial_url":"https://discuss.codechef.com/problems/PINS","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/PINS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/PINS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/PINS.pdf">Vietnamese</a> as well.</h3>


Chef's company wants to make ATM PINs for its users, so that they could use the PINs for withdrawing their hard-earned money. One of these users is Reziba, who lives in an area where a lot of robberies take place when people try to withdraw their money. 

Chef plans to include a safety feature in the PINs: if someone inputs the reverse of their own PIN in an ATM machine, the Crime Investigation Department (CID) are immediately informed and stop the robbery. However, even though this was implemented by Chef, some people could still continue to get robbed. The reason is that CID is only informed if the reverse of a PIN is different from that PIN (so that there wouldn't be false reports of robberies).

You know that a PIN consists of $N$ decimal digits. Find the probability that Reziba could get robbed. Specifically, it can be proven that this probability can be written as a fraction $P/Q$, where $P \ge 0$ and $Q \gt 0$ are coprime integers; you should compute $P$ and $Q$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$ denoting the length of each PIN. 

### Output
For each test case, print a single line containing two space-separated integers — the numerator $P$ and denominator $Q$ of the probability.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^5$

### Subtasks
**Subtask #1 (10 points):** $N \le 18$

**Subtask #2 (20 points):** $N \le 36$

**Subtask #3 (70 points):** original constraints

### Example Input
```
1
1
```

### Example Output
```
1 1
```

### Explanation
**Example case 1:** A PIN containing only one number would fail to inform the CID, since when it's input in reverse, the ATM detects the same PIN as the correct one. Therefore, Reziba can always get robbed — the probability is $1 = 1/1$.
