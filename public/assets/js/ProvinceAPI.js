$(function () {
    let ProvinceAPI = 'https://provinces.open-api.vn/api/?depth=2';

    $.ajax({
        url: ProvinceAPI,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {

            response.forEach(province => {

                $('#province').append(`<option value="${province.code}">${province.name}</option>`);
            });

            $('#province').change(function () {

                if ($(this).val() != '') {
                    //remove district when choose another province
                    $('#district option[value]').remove();

                    let provinceCode = $(this).val();
                    //console.log(provinceCode);

                    let provinceArray = response.filter(item => {
                        return String(item.code) == String(provinceCode);
                    })

                    //console.log(provinceArray);

                    let [{ districts }] = [...provinceArray];

                    //console.log(districts);

                    districts.forEach(district => {
                        $('#district').append(`<option value="${district.code}">${district.name}</option>`);
                    })
                }
            })

        },
        error: function () {
            throw new Error('Having errors');
        }
    })
});

