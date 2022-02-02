---
{"category_name":"easy","problem_code":"DPERM","problem_name":"The Grux Permutation ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n5 2   \n3 4 5 2 1\n5 2    \n4 3 2 1 5","output":"3\n-1","explanation":"**Example case 1:** Chef can perform the following swaps in this order:\n- swap the first and fifth element\n- swap the third and fifth element\n- swap the second and fourth element","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"23-06-2019","tags":{"0":"ltime73","1":"taran_1407","2":"thesitzr"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DPERM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/DPERM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/DPERM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/DPERM.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/DPERM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/DPERM.pdf) as well.

Chef received a permutation $P_1, P_2, \ldots, P_N$ and also an integer $D$ from his good friend Grux, because Grux was afraid he would forget them somewhere. However, since Grux was just playing with the permutation, it was all shuffled, and Chef only likes sorted permutations, so he decided to sort it by performing some swaps.

Chef wants to use the integer $D$ he just received, so he is only willing to swap two elements of the permutation whenever their absolute difference is exactly $D$. He has limited time, so you should determine the minimum number of swaps he needs to perform to sort the permutation, or tell him that it is impossible to sort it his way.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $D$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of swaps, or $-1$ if it is impossible to sort the permutation.

### Constraints 
- $1 \le T \le 20$
- $1 \le N \le 200,000$
- $1 \le D \le N$
- $1 \le P_i \le N$ for each valid $i$
- $P_1, P_2, \ldots, P_N$ are pairwise distinct
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (20 points):** $D = 1$

**Subtask #2 (30 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
5 2   
3 4 5 2 1
5 2    
4 3 2 1 5  
```

### Example Output
```
3
-1
```

### Explanation
**Example case 1:** Chef can perform the following swaps in this order:
- swap the first and fifth element
- swap the third and fifth element
- swap the second and fourth element

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>