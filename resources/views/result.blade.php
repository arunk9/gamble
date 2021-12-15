<table>
    <tr>
        <th>
            Affiliate Id
        </th>
        <th>
            Name
        </th>
        <th>
            Coordinates
        </th>
    </tr>
    @foreach ($result as $res)
        <tr>
            <td>
                {{$res['affiliate_id']}}
            </td>
            <td>
                {{$res['name']}}
            </td>
            <td>
                {{$res['latitude']}} ,  {{$res['longitude']}}
            </td>
        </tr>
    @endforeach
</table>
