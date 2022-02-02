---
{"category_name":"school","problem_code":"SLAB","problem_name":"Tax Slabs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n600000\r\n250000","output":"577500\r\n250000","explanation":"**Example case 1:** We know that the total income is Rs. $6$ lakh ($1$ lakh rupees = $10^5$ rupees). The total tax for each slab is calculated as follows:\r\n- Up to $2.5$ lakh, the tax is Rs. $0$, since the tax rate is $0$ percent.\r\n- From above Rs. $2.5$ lakh to Rs. $5$ lakh, the tax rate is $5$ percent. Therefore, this tax is $0.05 \\cdot (500,000-250,000)$, which is Rs. $12,500$.\r\n- From above Rs. $5$ lakh to Rs. $6$ lakh, the tax rate is $10$ percent. Therefore, this tax is $0.10 \\cdot (600,000-500,000)$, which is Rs. $10,000$.\r\n- Summing them up, we get that the total tax on Chef\u0027s whole income is Rs. $22,500$. Since the net income is the total income minus the tax reduction, it is Rs. $600,000$ minus Rs. $22,500$, which is Rs. $577,500$.\r\n\r\n**Example case 2:** For income up to Rs. $2.5$ lakh, we have no tax, so the net income is the same as the total income: Rs. $2.5$ lakh.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/OieDoPMYKfA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jatinngpl_adm","problem_tester":"","date_added":"13-02-2020","tags":{"0":"akashbhalotia","1":"cakewalk","2":"cook115","3":"jatinngpl_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SLAB","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SLAB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/SLAB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/SLAB.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/SLAB.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/SLAB.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/SLAB.pdf) as well.

In India, every individual is charged with income tax on the total income each year. This tax is applied to specific ranges of income, which are called income tax slabs. The slabs of income tax keep changing from year to year. This fiscal year (2020-21), the tax slabs and their respective tax rates are as follows:

<table>
  <tr>
    <td>Total income (in rupees)</td>
    <td>Tax rate</td>
  </tr>
  <tr>
    <td>up to Rs. 250,000</td>
    <td>0%</td>
  </tr>
  <tr>
    <td>from Rs. 250,001 to Rs. 500,000</td>
    <td>5%</td>
  </tr>
  <tr>
    <td>from Rs. 500,001 to Rs. 750,000</td>
    <td>10%</td>
  </tr>
  <tr>
    <td>from Rs. 750,001 to Rs. 1,000,000</td>
    <td>15%</td>
  </tr>
  <tr>
    <td>from Rs. 1,000,001 to Rs. 1,250,000</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>from Rs. 1,250,001 to Rs. 1,500,000</td>
    <td>25%</td>
  </tr>
  <tr>
    <td>above Rs. 1,500,000</td>
    <td>30%</td>
  </tr>
</table>

See the sample explanation for details on how the income tax is calculated.

You are given Chef's *total income*: $N$ rupees (Rs.). Find his *net income*. The net income is calculated by subtracting the total tax (also called *tax reduction*) from the total income. Note that you do not need to worry about any other kind of tax reductions, only the one described above.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer — Chef's net income.

### Constraints
- $1 \le T \le 10^3$
- $0 \le N \le 10^7$
- $N$ is a multiple of $100$

### Example Input
```
2
600000
250000
```

### Example Output
```
577500
250000
```

### Explanation
**Example case 1:** We know that the total income is Rs. $6$ lakh ($1$ lakh rupees = $10^5$ rupees). The total tax for each slab is calculated as follows:
- Up to $2.5$ lakh, the tax is Rs. $0$, since the tax rate is $0$ percent.
- From above Rs. $2.5$ lakh to Rs. $5$ lakh, the tax rate is $5$ percent. Therefore, this tax is $0.05 \cdot (500,000-250,000)$, which is Rs. $12,500$.
- From above Rs. $5$ lakh to Rs. $6$ lakh, the tax rate is $10$ percent. Therefore, this tax is $0.10 \cdot (600,000-500,000)$, which is Rs. $10,000$.
- Summing them up, we get that the total tax on Chef's whole income is Rs. $22,500$. Since the net income is the total income minus the tax reduction, it is Rs. $600,000$ minus Rs. $22,500$, which is Rs. $577,500$.

**Example case 2:** For income up to Rs. $2.5$ lakh, we have no tax, so the net income is the same as the total income: Rs. $2.5$ lakh.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>