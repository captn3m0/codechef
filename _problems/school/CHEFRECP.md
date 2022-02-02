---
{"category_name":"school","problem_code":"CHEFRECP","problem_name":"Chef and Recipe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n6\r\n1 1 4 2 2 2\r\n8\r\n1 1 4 3 4 7 7 7\r\n8\r\n1 7 7 3 3 4 4 4","output":"YES\r\nNO\r\nNO","explanation":"**Example case 1:** For each ingredient type, its ingredient jar is used only once and the quantities of all ingredients are pairwise distinct. Hence, this recipe could have been prepared by Chef. \r\n\r\n**Example case 2:** The jar of ingredient $4$ is used twice in the recipe, so it was not prepared by Chef.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/f-9myoqGS04","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"2-05-2020","tags":{"0":"akashbhalotia","1":"array","2":"cakewalk","3":"cook118","4":"frequency","5":"rishup_nitdgp","6":"rishup_nitdgp"},"problem_difficulty_level":"Cakewalk","best_tag":"Frequency Array","editorial_url":"https://discuss.codechef.com/problems/CHEFRECP","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFRECP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CHEFRECP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CHEFRECP.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CHEFRECP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CHEFRECP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CHEFRECP.pdf) as well.

In Chefland, types of ingredients are represented by integers and recipes are represented by sequences of ingredients that are used when cooking. One day, Chef found a recipe represented by a sequence $A_1, A_2, \ldots, A_N$ at his front door and he is wondering if this recipe was prepared by him.

Chef is a very picky person. He uses one ingredient jar for each type of ingredient and when he stops using a jar, he does not want to use it again later while preparing the same recipe, so ingredients of each type (which is used in his recipe) always appear as a contiguous subsequence. Chef is innovative, too, so he makes sure that in each of his recipes, the quantity of each ingredient (i.e. the number of occurrences of this type of ingredient) is unique ― distinct from the quantities of all other ingredients.

Determine whether Chef could have prepared the given recipe.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if the recipe could have been prepared by Chef or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^3$
- $1 \le A_i \le 10^3$ for each valid $i$

### Example Input
```
3
6
1 1 4 2 2 2
8
1 1 4 3 4 7 7 7
8
1 7 7 3 3 4 4 4
```

### Example Output
```
YES
NO
NO
```
	
### Explanation
**Example case 1:** For each ingredient type, its ingredient jar is used only once and the quantities of all ingredients are pairwise distinct. Hence, this recipe could have been prepared by Chef. 

**Example case 2:** The jar of ingredient $4$ is used twice in the recipe, so it was not prepared by Chef.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>